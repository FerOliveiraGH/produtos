<?php

namespace App\Business\Products;

use Illuminate\Contracts\Pagination\Paginator;

interface IProductsRepository
{
    public function getProducts(): Paginator;

    public function create(array $dto): array;

    public function update(array $dto): int;
}