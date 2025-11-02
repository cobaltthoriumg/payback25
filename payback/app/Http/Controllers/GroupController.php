<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\GroupMember;
use App\Services\GroupService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    public function __construct(
        private readonly GroupService $groupService
    ) {

    }

    /**
     * Display the group creation form.
     *
     * @return \Inertia\Response
     */
    public function create()
    {
        return inertia('Groups/Create');
    }

    /**
     * Store a newly created group in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $group = $this->groupService->createGroup([
            'name' => $request->name
        ]);

        return redirect()->route('groups.show', $group);
    }
}