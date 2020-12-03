<?php

namespace App\Repositories\Product;

use App\Http\Requests\Product\ProductRequest;
use App\Http\Resources\Product\ProductResource;
use App\Jobs\Product\StoreProduct;
use App\Jobs\Product\UpdateProduct;
use App\Models\Product\Product;
use App\Traits\apiResponseBuilder;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ProductRepository implements ProductRepositoryInterface
{
    use apiResponseBuilder;

    public function index()
    {
        return $this -> successResponse( ProductResource::collection( Product::paginate( 20 ) ), "Success", null, Response::HTTP_OK );
    }

    public function store( ProductRequest $productRequest )
    {
        return $this -> successResponse( ( new StoreProduct( $productRequest ) ) -> handle(), "Success", "Product created successfully", Response::HTTP_CREATED );
    }

    public function show( Product $product )
    {
        return $this -> successResponse( new ProductResource( $product ), "Success", null, Response::HTTP_OK );
    }

    public function update( ProductRequest $productRequest, Product $product )
    {
        return $this -> successResponse( ( new UpdateProduct( $productRequest, $product ) ) -> handle(), 'Success', 'Product updated successfully', Response::HTTP_OK );
    }

    /**
     * @param Product $product
     * @return JsonResponse
     * @throws Exception
     */
    public function delete( Product $product )
    {
        $product -> delete();
        return $this -> successResponse( null, 'Success', 'Product deleted successfully', Response::HTTP_NO_CONTENT );
    }
}
