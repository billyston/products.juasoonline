<?php

namespace App\Repositories\Business\Resource\Product\Color;

use App\Http\Requests\Business\Resource\Product\Color\ColorRequest;
use App\Http\Resources\Business\Resource\Product\Color\ColorResource;
use App\Jobs\Business\Resource\Product\Color\CreateColor;
use App\Jobs\Business\Resource\Product\Color\UpdateColor;
use App\Models\Business\Product\Color\Color;
use App\Models\Business\Product\Product\Product;

use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ColorRepository implements ColorRepositoryInterface
{
    use apiResponseBuilder, Relatives;

    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function index( Product $product  ) : JsonResponse
    {
        return $this -> successResponse( ColorResource::collection( $product -> colors() -> paginate() ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param Product $product
     * @param ColorRequest $colorRequest
     * @return JsonResponse
     */
    public function store( Product $product, ColorRequest $colorRequest ) : JsonResponse
    {
        return $this -> successResponse( ( new CreateColor( $product, $colorRequest ) ) -> handle(), "Success", "Image(s) created", Response::HTTP_CREATED );
    }

    /**
     * @param Color $color
     * @param Product $product
     * @return JsonResponse
     */
    public function show( Product $product, Color $color ) : JsonResponse
    {
        checkResourceRelation( $product -> colors() -> where( 'colors.id', $color -> id ) -> count());
        if ( $this -> loadRelationships() ) { $color -> load( $this -> relationships ); }
        return $this -> successResponse( new ColorResource( $color ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param Product $product
     * @param ColorRequest $colorRequest
     * @param Color $color
     * @return JsonResponse
     */
    public function update( Product $product, ColorRequest $colorRequest, Color $color ) : JsonResponse
    {
        checkResourceRelation( $product -> colors() -> where( 'colors.id', $color -> id ) -> count());
        return $this -> successResponse( ( new UpdateColor( $colorRequest, $color ) ) -> handle(), 'Success', 'Product updated', Response::HTTP_OK );
    }

    /**
     * @param Product $product
     * @param Color $color
     * @return JsonResponse
     */
    public function destroy( Product $product, Color $color ) : JsonResponse
    {
        checkResourceRelation( $product -> colors() -> where( 'colors.id', $color -> id ) -> count());
        $color -> delete();
        return $this -> successResponse( null, 'Success', 'Color deleted', Response::HTTP_NO_CONTENT );
    }
}
