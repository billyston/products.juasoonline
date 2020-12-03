<?php

namespace App\Repositories\Product;

use App\Http\Requests\Product\ProductRequest;
use App\Models\Product\Product;

interface ProductRepositoryInterface
{
    public function index();

    public function store(ProductRequest $productRequest);

    public function show(Product $product);

    public function update(ProductRequest $productRequest, Product $product);

    public function delete(Product $product);
}
