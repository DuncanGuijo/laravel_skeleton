<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\UserRepository;
use App\Models\User;

class UserEloquentRepository implements UserRepository {

    public function find(int $id) : User {
        return User::find($id);
    }
}