<?php

namespace App\Repositories\Interfaces;

use App\Models\Product;
use LaravelEasyRepository\Repository;

interface ProductRepositoryInterface extends Repository{

    public function insertOrUpdateProduct(array $key, array $data) : Product;
    public function insertProduct(array $data) : Product;
}
