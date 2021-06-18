<?php

namespace App\Services;

use App\Repository\UserRepositoryInterface;
use App\Services\Interfaces\UserServiceI;

class UserService extends BaseService implements UserServiceI
{

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->repository = $userRepository;
    }
}
