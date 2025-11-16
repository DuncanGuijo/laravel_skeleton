<?php

namespace App\Repositories\Contracts;

use App\Models\User;

interface UserRepository {

    public function find(int $id) : User;
}