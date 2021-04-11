<?php

namespace App\Repositories\Product;

use App\Http\Requests\Product\ProductRequest;
use App\Http\Resources\Product\ProductResource;
use App\Jobs\Product\CreateProduct;
use App\Jobs\Product\UpdateProduct;
use App\Models\Product\Product;
use App\Models\Store\Store;
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
     * @param Store $store
     * @return JsonResponse
     */
    public function index( Store $store ) : JsonResponse
    {
        return $this -> successResponse( ProductResource::collection( $store -> products() -> paginate() ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param ProductRequest $productRequest
     * @param Store $store
     * @return JsonResponse
     */
    public function store( ProductRequest $productRequest, Store $store ) : JsonResponse
    {
        return $this -> successResponse( ( new CreateProduct( $productRequest ) ) -> handle(), "Success", "Product created", Response::HTTP_CREATED );
    }

    /**
     * @param Product $product
     * @param Store $store
     * @return JsonResponse
     */
    public function show( Store $store, Product $product ) : JsonResponse
    {
        checkResourceRelation( $store -> products() -> where( 'products.id', $product -> id ) -> count());
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
