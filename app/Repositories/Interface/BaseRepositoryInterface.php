<?php

namespace App\Repositories\Interface;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface
{
    public function getInfoById($id): ?Model;
    public function GetInfoByIds(array $ids): Collection;
    public function getAll() : Collection;
}