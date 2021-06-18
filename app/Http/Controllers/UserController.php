<?php

namespace App\Http\Controllers;

use App\Services\Interfaces\UserServiceI;

class UserController extends Controller
{
    private $userService;

    public function __construct(UserServiceI $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        return response()->json($this->userService->all(), 200);
    }
}
