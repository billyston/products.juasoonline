<?php

namespace App\Repositories\Business\Resource\Product\Product;

use App\Http\Requests\Business\Resource\Product\Product\ProductRequest;
use App\Http\Resources\Business\Resource\Product\Product\ProductResource;
use App\Jobs\Business\Resource\Product\Product\CreateProduct;
use App\Jobs\Business\Resource\Product\Product\UpdateProduct;
use App\Models\Business\Product\Product\Product;
use App\Models\Business\Store\Store\Store;

use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ProductRepository implements ProductRepositoryInterface
{
    use apiResponseBuilder, Relatives;

    /**
     * @param Store $store
     * @return JsonResponse
     */
    public function index( Store $store ) : JsonResponse
    {
        return $this -> successResponse( ProductResource::collection( $store -> products() -> get() ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param ProductRequest $productRequest
     * @param Store $store
     * @return JsonResponse
     */
    public function store( Store $store, ProductRequest $productRequest ) : JsonResponse
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
     * @param Store $store
     * @param ProductRequest $productRequest
     * @param Product $product
     * @return JsonResponse
     */
    public function update( Store $store, ProductRequest $productRequest, Product $product ) : JsonResponse
    {
        checkResourceRelation( $store -> products() -> where( 'products.id', $product -> id ) -> count());
        return $this -> successResponse( ( new UpdateProduct( $productRequest, $product ) ) -> handle(), 'Success', 'Product updated', Response::HTTP_OK );
    }
}
