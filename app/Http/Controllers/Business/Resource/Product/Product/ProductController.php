<?php

namespace App\Http\Controllers\Business\Resource\Product\Product;

use App\Http\Requests\Business\Resource\Product\Product\ProductRequest;
use App\Models\Business\Product\Product\Product;
use App\Models\Business\Store\Store\Store;
use App\Repositories\Business\Resource\Product\Product\ProductRepositoryInterface;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    private ProductRepositoryInterface $theRepository;

    /**
     * ProductController constructor.
     * @param ProductRepositoryInterface $productRepository
     */
    public function __construct( ProductRepositoryInterface $productRepository )
    {
        $this -> theRepository = $productRepository;
    }

    /**
     * @param Store $store
     * @return JsonResponse
     */
    public function index( Store $store ) : JsonResponse
    {
        return $this -> theRepository -> index( $store );
    }

    /**
     * @param ProductRequest $productRequest
     * @param Store $store
     * @return mixed
     */
    public function store( Store $store, ProductRequest $productRequest ) : JsonResponse
    {
        return $this -> theRepository -> store( $store, $productRequest );
    }

    /**
     * @param Product $product
     * @param Store $store
     * @return JsonResponse
     */
    public function show( Store $store, Product $product ) : JsonResponse
    {
        return $this -> theRepository -> show( $store, $product );
    }

    /**
     * @param Store $store
     * @param ProductRequest $productRequest
     * @param Product $product
     * @return JsonResponse
     */
    public function update( Store $store, ProductRequest $productRequest, Product $product ) : JsonResponse
    {
        return $this -> theRepository -> update( $store, $productRequest, $product );
    }
}
