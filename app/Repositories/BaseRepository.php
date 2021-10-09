<?php

namespace App\Repositories;

use App\Repositories\Interface\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements BaseRepositoryInterface
{
    private string $modelClass;
    protected Model $model;

    public function __construct(?string $modelClass = null)
    {
        $this->modelClass = $modelClass;
        $this->model = app($this->modelClass);
    }

    public function getInfoById($id) : ?Model
    {
        return $this->model->find($id);
    }

    public function GetInfoByIds(array $ids): Collection
    {
        return $this->model->find($ids);
    }

    public function getAll(): Collection
    {
        return $this->model->all();
    }
}