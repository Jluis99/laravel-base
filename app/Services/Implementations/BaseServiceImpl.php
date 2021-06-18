<?php

namespace App\Services\Implementations;

use App\Services\BaseService;

abstract class BaseServiceImpl implements BaseService
{
    protected $repository;

    /**
     * Get all models.
     *
     * @param array $columns
     * @param array $relations
     * @return Collection
     */
    public function all($columns = ['*'], $relations = [])
    {
        return $this->repository->all($columns, $relations);
    }

    /**
     * Get all trashed models.
     *
     * @return Collection
     */
    public function allTrashed()
    {
        return $this->repository->allTrashed();
    }

    /**
     * Find model by id.
     *
     * @param int $modelId
     * @param array $columns
     * @param array $relations
     * @param array $appends
     * @return Model
     */
    public function findById(int $modelId, array $columns = ['*'], array $relations = [], array $appends = []) {
        return $this->repository->findById($modelId);
    }

    /**
     * Find trashed model by id.
     *
     * @param int $modelId
     * @return Model
     */
    public function findTrashedById(int $modelId)
    {
        return $this->repository->findTrashedById($modelId);
    }

    /**
     * Find only trashed model by id.
     *
     * @param int $modelId
     * @return Model
     */
    public function findOnlyTrashedById(int $modelId)
    {
        return $this->repository->findOnlyTrashedById($modelId);
    }

    /**
     * Create a model.
     *
     * @param array $payload
     * @return Model
     */
    public function create(array $payload)
    {

        return $this->repository->create($payload);
    }

    /**
     * Update existing model.
     *
     * @param int $modelId
     * @param array $payload
     * @return bool
     */
    public function update(int $modelId, array $payload)
    {
        return $this->repository->update($modelId, $payload);
    }

    /**
     * Delete model by id.
     *
     * @param int $modelId
     * @return bool
     */
    public function deleteById(int $modelId): bool
    {
        return $this->repository->deleteById($modelId);
    }

    /**
     * Restore model by id.
     *
     * @param int $modelId
     * @return bool
     */
    public function restoreById(int $modelId)
    {
        return $this->repository->restoreById($modelId);
    }

    /**
     * Permanently delete model by id.
     *
     * @param int $modelId
     * @return bool
     */
    public function permanentlyDeleteById(int $modelId): bool
    {
        return $this->repository->permanentlyDeleteById($modelId);
    }

}
