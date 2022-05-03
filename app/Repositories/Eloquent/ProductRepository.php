<?php

namespace App\Repositories\Eloquent;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use App\Models\Product;

class ProductRepository extends Eloquent implements ProductRepositoryInterface{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    protected $model;

    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    public function insertOrUpdateProduct(array $key, array $data) : Product
    {
       return $this->model->updateOrCreate(
            $key, $data
       );
    }

    public function insertProduct(array $data): Product
    {
        return $this->model->create($data);
    }
}
