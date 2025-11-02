<?php

namespace App\Services;

use App\Models\Group;
use App\Models\GroupMember;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GroupService
{
    public function createGroup(array $data): Group
    {
        $group = Group::create([
            'name' => $data['name']
        ]);
        $this->createCurrentGroupMember($group->getId());
        $token = $this->generateGroupToken($group->getId());
        $group->setInvitationToken($token);
        return $group;
    }

    public function createCurrentGroupMember(string $groupId) : void {
        GroupMember::create([
            'group_id' => $groupId,
            'user_id' => Auth::id(),
            'is_admin' => true,
        ]);
    }

    private function generateGroupToken(string $groupId): string {
        return Hash::make($groupId . time());
    }
}