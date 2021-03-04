<?php

namespace App\Repositories\Product;

use App\Http\Requests\Product\ProductRequest;
use App\Http\Resources\Product\ProductResource;
use App\Jobs\Product\CreateProduct;
use App\Jobs\Product\UpdateProduct;
use App\Models\Product\Product;
use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ProductRepository implements ProductRepositoryInterface
{
    use apiResponseBuilder; use Relatives;

    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse
    {
        $Group = Product::query() -> when( $this -> loadRelationships(), function ( Builder $builder ) { return $builder -> with ( $this -> relationships ); } ) -> paginate( 20 );
        return $this -> successResponse( ProductResource::collection( $Group ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param ProductRequest $productRequest
     * @return JsonResponse
     */
    public function store( ProductRequest $productRequest ) : JsonResponse
    {
        return $this -> successResponse( ( new CreateProduct( $productRequest ) ) -> handle(), "Success", "Product created", Response::HTTP_CREATED );
    }

    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function show( Product $product ) : JsonResponse
    {
        if ( $this -> loadRelationships() ) { $product -> load( $this -> relationships ); }
        return $this -> successResponse( new ProductResource( $product ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param ProductRequest $productRequest
     * @param Product $product
     * @return JsonResponse
     */
    public function update( ProductRequest $productRequest, Product $product ) : JsonResponse
    {
        return $this -> successResponse( ( new UpdateProduct( $productRequest, $product ) ) -> handle(), 'Success', 'Product updated', Response::HTTP_OK );
    }

    /**
     * @param Product $product
     * @return JsonResponse
     * @throws Exception
     */
    public function delete( Product $product ) : JsonResponse
    {
        $product -> delete();
        return $this -> successResponse( null, 'Success', 'Product deleted', Response::HTTP_NO_CONTENT );
    }
}
