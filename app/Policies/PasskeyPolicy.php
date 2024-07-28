<?php

namespace App\Policies;

use App\Models\Passkey;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PasskeyPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {

    }

    public function view(User $user, Passkey $passkey)
    {
    }

    public function create(User $user)
    {
    }

    public function update(User $user, Passkey $passkey)
    {
    }

    public function delete(User $user, Passkey $passkey): bool
    {
        return $user->is($passkey->user);
    }

    public function restore(User $user, Passkey $passkey)
    {
    }

    public function forceDelete(User $user, Passkey $passkey)
    {
    }
}
