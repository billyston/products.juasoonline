<?php

namespace App\Repositories\Product;

use App\Http\Requests\Product\ProductRequest;
use App\Models\Product\Product;

interface ProductRepositoryInterface
{
    /**
     * @return mixed
     */
    public function index();

    /**
     * @param ProductRequest $productRequest
     * @return mixed
     */
    public function store( ProductRequest $productRequest );

    /**
     * @param Product $product
     * @return mixed
     */
    public function show( Product $product );

    /**
     * @param ProductRequest $productRequest
     * @param Product $product
     * @return mixed
     */
    public function update( ProductRequest $productRequest, Product $product );

    /**
     * @param Product $product
     * @return mixed
     */
    public function delete( Product $product );
}
