<?php

namespace App\Http\Controllers\Business\Resource\Product\Promotion;

use App\Repositories\Business\Resource\Product\Promotion\PromotionRepositoryInterface;
use App\Http\Requests\Business\Resource\Product\Promotion\PromotionRequest;
use App\Models\Business\Product\Product\Product;
use App\Models\Business\Product\Promotion\Promotion;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class PromotionController extends Controller
{
    private PromotionRepositoryInterface $theRepository;

    /**
     * @param PromotionRepositoryInterface $promotionRepository
     */
    public function __construct( PromotionRepositoryInterface $promotionRepository )
    {
        $this -> theRepository = $promotionRepository;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Product $product
     * @return JsonResponse
     */
    public function index( Product $product ) : JsonResponse
    {
        return $this -> theRepository -> index( $product );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Product $product
     * @param PromotionRequest $promotionRequest
     * @return JsonResponse
     */
    public function store( Product $product, PromotionRequest $promotionRequest ) : JsonResponse
    {
        return $this -> theRepository -> store( $product, $promotionRequest );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Product $product
     * @param Promotion $promotion
     * @return JsonResponse
     */
    public function show( Product $product, Promotion $promotion ) : JsonResponse
    {
        return $this -> theRepository -> show( $product, $promotion );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Product $product
     * @param PromotionRequest $promotionRequest
     * @param Promotion $promotion
     * @return JsonResponse
     */
    public function update( Product $product, PromotionRequest $promotionRequest, Promotion $promotion ) : JsonResponse
    {
        return $this -> theRepository -> update( $product, $promotionRequest, $promotion );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Product $product
     * @param Promotion $promotion
     * @return JsonResponse
     */
    public function destroy( Product $product, Promotion $promotion ) : JsonResponse
    {
        return $this -> theRepository -> destroy( $product, $promotion );
    }
}
