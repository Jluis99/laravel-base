<?php

namespace App\Repositories\Implementations;

use App\Models\User;
use App\Repositories\UserRepository;

class UserRepositoryImpl extends BaseRepositoryImpl implements UserRepository
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * BaseRepository constructor.
     *
     * @param Model $model
     */
    public function __construct(User $model)
    {
        $this->model = $model;
    }
}
