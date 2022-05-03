<?php

namespace App\Services;

use App\Models\Product;
use LaravelEasyRepository\Service;
use App\Repositories\Interfaces\ProductRepositoryInterface;

class ProductService extends Service {

     /**
     * don't change $this->mainInterface variable name
     * because used in extends service class
     */
     protected $mainInterface;

    public function __construct(ProductRepositoryInterface $mainInterface)
    {
      $this->mainInterface = $mainInterface;
    }

    public function insertOrUpdateProduct(array $key, array $data) : Product
    {
		return $this->mainInterface->insertOrUpdateProduct(
			$key, $data
		);
   }

    public function insertProduct(array $data): Product
    {
        return $this->mainInterface->insertProduct($data);
    }
}
