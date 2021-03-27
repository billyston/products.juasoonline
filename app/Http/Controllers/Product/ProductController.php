<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductRequest;
use App\Models\Product\Product;
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
     * @return JsonResponse
     */
    public function index() : JsonResponse
    {
        return $this -> theRepository -> index();
    }

    /**
     * @param ProductRequest $productRequest
     * @return mixed
     */
    public function store( ProductRequest $productRequest ) : JsonResponse
    {
        return $this -> theRepository -> store( $productRequest );
    }

    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function show( Product $product ) : JsonResponse
    {
        return $this -> theRepository -> show( $product );
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
