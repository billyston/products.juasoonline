<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductRequest;
use App\Models\Product\Product;
use App\Models\Store\Store;
use App\Repositories\Product\ProductRepositoryInterface;
use Illuminate\Http\JsonResponse;

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
    public function store( ProductRequest $productRequest, Store $store ) : JsonResponse
    {
        return $this -> theRepository -> store( $productRequest, $store );
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
     * @param ProductRequest $productRequest
     * @param Product $product
     * @return JsonResponse
     */
    public function update( ProductRequest $productRequest, Product $product ) : JsonResponse
    {
        return $this -> theRepository -> update( $productRequest, $product );
    }

    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function destroy( Product $product ) : JsonResponse
    {
        return $this -> theRepository -> delete( $product );
    }
}
