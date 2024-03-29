<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface BaseRepositoryInterface
{
    public function getAll(): Collection;
    public function create(array $data);
}