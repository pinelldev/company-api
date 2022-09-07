<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Resources\UserResource;
use App\Http\Requests\User\IndexRequest;

class UserController extends Controller
{
    public function index(IndexRequest $request)
    {
        return UserResource::collection(User::all());
    }
}
