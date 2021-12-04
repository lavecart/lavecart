<?php

namespace App\Services;

use App\Repositories\ProductCategoryRepository;

class ProductCategoryService
{
    private $productCategoryRepository;

    public function __construct(ProductCategoryRepository $productCategoryRepository)
    {
        $this->productCategoryRepository = $productCategoryRepository;
    }

    public function create($data)
    {
        $this->productCategoryRepository->create($data);
    }
}