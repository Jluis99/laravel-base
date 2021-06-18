<?php

namespace App\Services\Implementations;

use App\Repositories\UserRepository;
use App\Services\Implementations\BaseServiceImpl;
use App\Services\UserService;

class UserServiceImpl extends BaseServiceImpl implements UserService
{

    public function __construct(UserRepository $UserRepositoryImpl)
    {
        $this->repository = $UserRepositoryImpl;
    }
}
