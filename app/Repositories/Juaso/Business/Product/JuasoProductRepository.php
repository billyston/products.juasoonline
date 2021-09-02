<?php

namespace App\Repositories\Juaso\Business\Product;

use App\Http\Resources\Business\Resource\Product\Product\ProductResource;
use App\Models\Business\Product\Product\Product;

use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

use Exception;

class JuasoProductRepository implements JuasoProductRepositoryInterface
{
    use apiResponseBuilder; use Relatives;

    /**
     * @return JsonResponse
     */
    public function index () : JsonResponse
    {
        $Product = Product::query() -> when( $this -> loadRelationships(), function ( Builder $builder ) { return $builder -> with ( $this -> relationships ); } ) -> get();
        return $this -> successResponse( ProductResource::collection( $Product ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function show ( Product $product ) : JsonResponse
    {
        if ( $this -> loadRelationships() ) { $product -> load( $this -> relationships ); }
        return $this -> successResponse( new ProductResource( $product ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param Product $product
     * @return JsonResponse|mixed
     */
    public function destroy( Product $product ) : JsonResponse
    {
        try
        {
            $product -> delete();
            return $this -> successResponse( null, 'Success', 'Store deleted.', Response::HTTP_NO_CONTENT );
        }

        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
