<?php

namespace App\Repositories\Product\Color;

use App\Http\Requests\Product\Color\ColorRequest;
use App\Http\Resources\Product\Color\ColorResource;
use App\Jobs\Product\Color\CreateColor;
use App\Jobs\Product\Color\UpdateColor;
use App\Models\Product\Color\Color;
use App\Models\Product\Product;
use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ColorRepository implements ColorRepositoryInterface
{
    use apiResponseBuilder, Relatives;

    /**
     * @param Product $theProduct
     * @return JsonResponse
     */
    public function index( Product $theProduct ) : JsonResponse
    {
        return $this -> successResponse( ColorResource::collection( $theProduct -> colors() -> paginate() ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param ColorRequest $colorRequest
     * @param Product $theProduct
     * @return JsonResponse
     */
    public function store( ColorRequest $colorRequest, Product $theProduct ) : JsonResponse
    {
        return $this -> successResponse( ( new CreateColor( $colorRequest, $theProduct ) ) -> handle(), "Success", "Image(s) created", Response::HTTP_CREATED );
    }

    /**
     * @param Color $color
     * @param Product $product
     * @return JsonResponse
     */
    public function show( Color $color, Product $product ) : JsonResponse
    {
        checkResourceRelation( $product -> colors() -> where( 'colors.id', $product -> id ) -> count());
        if ( $this -> loadRelationships() ) { $color -> load( $this -> relationships ); }
        return $this -> successResponse( new ColorResource( $product ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param ColorRequest $colorRequest
     * @param Color $color
     * @return JsonResponse
     */
    public function update( ColorRequest $colorRequest, Color $color ) : JsonResponse
    {
        return $this -> successResponse( ( new UpdateColor( $colorRequest, $color ) ) -> handle(), 'Success', 'Product updated', Response::HTTP_OK );
    }

    /**
     * @param Color $color
     * @return JsonResponse
     */
    public function destroy( Color $color ) : JsonResponse
    {
        $color -> delete();
        return $this -> successResponse( null, 'Success', 'Color deleted', Response::HTTP_NO_CONTENT );
    }
}
