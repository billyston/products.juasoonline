<?php

namespace App\Repositories\Juasoonline\Business\Product;

use App\Http\Resources\Business\Resource\Product\Product\ProductResource;
use App\Models\Business\Product\Product\Product;

use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Symfony\Component\HttpFoundation\Response;

class JuasoonlineProductsRepository implements JuasoonlineProductsRepositoryInterface
{
    use apiResponseBuilder, Relatives;

    /**
     * @return AnonymousResourceCollection
     */
    public function getProducts() : AnonymousResourceCollection
    {
        $Product = Product::query() -> when( $this -> loadRelationships(), function ( Builder $builder ) { return $builder -> with ( $this -> relationships ); }) -> orderBy( 'id', 'desc' ) -> where( 'status', '=', '000' ) -> paginate('10');
        return ProductResource::collection( $Product );
    }

    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function getProduct( Product $product ) : JsonResponse
    {
        if ( $this -> loadRelationships() ) { $product -> load( $this -> relationships ); }
        return $this -> successResponse( new ProductResource( $product ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function getProductRecommendations( Product $product ) : JsonResponse
    {
        $product = Product::query();
        if ( request('name')) { $product -> where('name', 'Like', '%' . request('name' ) . '%'); }
        return $this -> successResponse( ProductResource::collection( $product -> orderBy('id', 'DESC' ) -> where( 'status', '=', '000' ) -> paginate(500) ), "Success", null, Response::HTTP_OK );
    }
}
