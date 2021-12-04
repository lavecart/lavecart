<?php

namespace App\Repositories;

use App\Interfaces\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements BaseRepositoryInterface
{
    protected $model;

    public function __construct($modelClass)
    {
        $this->model = $modelClass;
    }

    public function getAll() : Collection {
        return $this->model->all();
    }
}