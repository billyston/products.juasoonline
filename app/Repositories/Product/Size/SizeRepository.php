<?php

namespace App\Repositories\Product\Size;

use App\Http\Requests\Product\Size\SizeRequest;
use App\Http\Resources\Product\Size\SizeResource;
use App\Jobs\Product\Size\CreateSize;
use App\Jobs\Product\Size\UpdateSize;
use App\Models\Product\Product;
use App\Models\Product\Size\Size;
use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

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
     * @param Size $size
     * @return JsonResponse
     */
    public function show( Size $size ) : JsonResponse
    {
        if ( $this -> loadRelationships() ) { $size -> load( $this -> relationships ); }
        return $this -> successResponse( new SizeResource( $size ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param SizeRequest $sizeRequest
     * @param Size $size
     * @return JsonResponse
     */
    public function update( SizeRequest $sizeRequest, Size $size ) : JsonResponse
    {
        return $this -> successResponse( ( new UpdateSize( $sizeRequest, $size ) ) -> handle(), 'Success', 'Size(s) updated', Response::HTTP_OK );
    }

    /**
     * @param Size $size
     * @return JsonResponse
     */
    public function destroy( Size $size ) : JsonResponse
    {
        $size -> delete();
        return $this -> successResponse( null, 'Success', 'Specification deleted', Response::HTTP_NO_CONTENT );
    }
}
