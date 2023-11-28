<?php

namespace App\Listeners;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AssignDefaultPermissions
{
    public function __construct()
    {
        //
    }

    public function handle(Registered $event)
    {
        // Get the registered user
        $user = $event->user;

        // Assign default permissions here
        // Example: Assigning 'user' role to the user
        $user->permissions = json_encode(['user']); // Assuming permissions are stored as JSON

        // Save the updated user with default permissions
        $user->save();
    }
}
