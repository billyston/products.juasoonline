<?php

namespace App\Repositories\Business\Resource\Product\Size;

use App\Http\Requests\Business\Resource\Product\Size\SizeRequest;
use App\Http\Resources\Business\Resource\Product\Size\SizeResource;
use App\Jobs\Business\Resource\Product\Size\CreateSize;
use App\Jobs\Business\Resource\Product\Size\UpdateSize;
use App\Models\Business\Product\Product\Product;
use App\Models\Business\Product\Size\Size;

use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class SizeRepository implements SizeRepositoryInterface
{
    use apiResponseBuilder, Relatives;

    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function index( Product $product ) : JsonResponse
    {
        return $this -> successResponse( SizeResource::collection( $product -> sizes() -> paginate() ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param Product $product
     * @param SizeRequest $sizeRequest
     * @return JsonResponse
     */
    public function store( Product $product, SizeRequest $sizeRequest ) : JsonResponse
    {
        return $this -> successResponse( ( new CreateSize( $product, $sizeRequest  ) ) -> handle(), "Success", "Size(s) created", Response::HTTP_CREATED );
    }

    /**
     * @param Product $product
     * @param Size $size
     * @return JsonResponse
     */
    public function show( Product $product, Size $size ) : JsonResponse
    {
        checkResourceRelation( $product -> sizes() -> where( 'sizes.id', $size -> id ) -> count());
        if ( $this -> loadRelationships() ) { $size -> load( $this -> relationships ); }
        return $this -> successResponse( new SizeResource( $size ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param Product $product
     * @param SizeRequest $sizeRequest
     * @param Size $size
     * @return JsonResponse
     */
    public function update( Product $product, SizeRequest $sizeRequest, Size $size ) : JsonResponse
    {
        checkResourceRelation( $product -> sizes() -> where( 'sizes.id', $size -> id ) -> count());
        return $this -> successResponse( ( new UpdateSize( $sizeRequest, $size ) ) -> handle(), 'Success', 'Size(s) updated', Response::HTTP_OK );
    }

    /**
     * @param Product $product
     * @param Size $size
     * @return JsonResponse
     */
    public function destroy( Product $product, Size $size ) : JsonResponse
    {
        checkResourceRelation( $product -> sizes() -> where( 'sizes.id', $size -> id ) -> count());
        $size -> delete();
        return $this -> successResponse( null, 'Success', 'Size(s) deleted', Response::HTTP_NO_CONTENT );
    }
}
