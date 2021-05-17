<?php

namespace App\Repositories\Product\Promotion;

use App\Http\Requests\Product\Promotion\PromotionRequest;
use App\Http\Resources\Product\Promotion\PromotionResource;
use App\Jobs\Product\Promotion\CreatePromotion;
use App\Jobs\Product\Promotion\UpdatePromotion;
use App\Models\Product\Product;
use App\Models\Product\Promotion\Promotion;
use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class PromotionRepository implements PromotionRepositoryInterface
{
    use apiResponseBuilder, Relatives;

    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function index( Product $product ) : JsonResponse
    {
        return $this -> successResponse( PromotionResource::collection( $product -> colors() -> paginate() ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param Product $product
     * @param PromotionRequest $promotionRequest
     * @return JsonResponse
     */
    public function store( Product $product, PromotionRequest $promotionRequest ) : JsonResponse
    {
        return $this -> successResponse( ( new CreatePromotion( $product, $promotionRequest ) ) -> handle(), "Success", "Promotion created", Response::HTTP_CREATED );
    }

    /**
     * @param Product $product
     * @param Promotion $promotion
     * @return JsonResponse
     */
    public function show( Product $product, Promotion $promotion ) : JsonResponse
    {
        checkResourceRelation( $product -> promotions() -> where( 'promotions.id', $product -> id ) -> count());
        if ( $this -> loadRelationships() ) { $promotion -> load( $this -> relationships ); }
        return $this -> successResponse( new PromotionResource( $promotion ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param Product $product
     * @param PromotionRequest $promotionRequest
     * @param Promotion $promotion
     * @return JsonResponse
     */
    public function update( Product $product, PromotionRequest $promotionRequest, Promotion $promotion ) : JsonResponse
    {
        checkResourceRelation( $product -> colors() -> where( 'colors.id', $product -> id ) -> count());
        return $this -> successResponse( ( new UpdatePromotion( $promotionRequest, $promotion ) ) -> handle(), 'Success', 'Promotion updated', Response::HTTP_OK );
    }

    /**
     * @param Product $product
     * @param Promotion $promotion
     * @return JsonResponse
     */
    public function destroy( Product $product, Promotion $promotion ) : JsonResponse
    {
        checkResourceRelation( $product -> promotions() -> where( 'promotions.id', $product -> id ) -> count());
        $promotion -> delete();
        return $this -> successResponse( null, 'Success', 'Promotion deleted', Response::HTTP_NO_CONTENT );
    }
}
