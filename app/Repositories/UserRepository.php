<?php

namespace App\Repositories;

use App\Models\User;


class UserRepository
{
    protected $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    public function create($attributes)
    {
        return  $this->user->create($attributes);
    }
    public function updatePass($user)
    {
        return $user->save();
    }
    public function update($user)
    {
        return $user->save();
    }
    public function get($user_id)
    {
        return $this->user->find($user_id);
    }
}
