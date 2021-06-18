<?php

namespace App\Services;

interface BaseService
{
    public function all($columns = ['*'], $relations = []);

    public function allTrashed();

    public function findById(int $modelId, array $columns = ['*'], array $relations = [], array $appends = []);

    public function findTrashedById(int $modelId);

    public function findOnlyTrashedById(int $modelId);

    public function create(array $payload);

    public function update(int $modelId, array $payload);

    public function deleteById(int $modelId);

    public function restoreById(int $modelId);

    public function permanentlyDeleteById(int $modelId);
}
