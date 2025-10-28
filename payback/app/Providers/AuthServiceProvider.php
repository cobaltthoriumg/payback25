<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Expense;
use App\Models\Group;
use App\Models\GroupMember;
use App\Policies\ExpensePolicy;
use App\Policies\GroupPolicy;
use App\Policies\GroupMemberPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Expense::class => ExpensePolicy::class,
        Group::class => GroupPolicy::class,
        GroupMember::class => GroupMemberPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
    }
}