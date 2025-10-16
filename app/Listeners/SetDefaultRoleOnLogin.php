<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Authenticated;

class SetDefaultRoleOnLogin
{
    public function handle(Authenticated $event): void
    {
        $user = $event->user;
        $roles = $user->getRoleNames();

        if ($roles->count() === 1) {
            $defaultRole = $roles->first();
        } elseif ($roles->contains('admin')) {
            $defaultRole = 'admin';
        } elseif ($roles->contains('officer')) {
            $defaultRole = 'officer';
        } elseif ($roles->contains('nodal')) {
            $defaultRole = 'nodal';
        } else {
            $defaultRole = $roles->first();
        }

        session(['active_role' => $defaultRole]);
    }
}
