<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository extends Repository
{
    // Constructor to bind model to repo
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function getOnlyTrashed()
    {
        return $this->model->onlyTrashed()->get();
    }
}
