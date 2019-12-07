<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Get all users data.
     *
     * @param
     *
     * @return response
     */
    public function getUsers(UserRepository $userRepository)
    {
        return response()->json($userRepository->getAllRecords(), 200);
    }
}
