<?php

namespace App\Http\Controllers\Api;

use App\User;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        return UserResource::collection(User::paginate(10));
    }
}
