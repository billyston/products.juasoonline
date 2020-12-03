<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductRequest;
use App\Models\Product\Product;
use App\Repositories\Product\ProductRepositoryInterface;

class ProductController extends Controller
{
    private $theRepository;

    /**
     * ProductController constructor.
     * @param ProductRepositoryInterface $productRepository
     */
    public function __construct( ProductRepositoryInterface $productRepository )
    {
        $this -> theRepository = $productRepository;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        return $this -> theRepository -> index();
    }

    /**
     * @param ProductRequest $productRequest
     * @return mixed
     */
    public function store( ProductRequest $productRequest )
    {
        return $this -> theRepository -> store( $productRequest );
    }

    /**
     * @param Product $product
     * @return mixed
     */
    public function show( Product $product )
    {
        return $this -> theRepository -> show( $product );
    }

    /**
     * @param ProductRequest $productRequest
     * @param Product $product
     * @return mixed
     */
    public function update( ProductRequest $productRequest, Product $product )
    {
        return $this -> theRepository -> update( $productRequest, $product );
    }

    /**
     * @param Product $product
     * @return mixed
     */
    public function destroy( Product $product )
    {
        return $this -> theRepository -> delete( $product );
    }
}
