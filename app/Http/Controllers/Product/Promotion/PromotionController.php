<?php

namespace App\Http\Controllers\Product\Promotion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\Promotion\PromotionRequest;
use App\Models\Product\Product;
use App\Models\Product\Promotion\Promotion;
use App\Repositories\Product\Promotion\PromotionRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

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
        $this -> theRepository -> index( $product );
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
        $this -> theRepository -> store( $product, $promotionRequest );
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
        $this -> theRepository -> show( $product, $promotion );
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
        $this -> theRepository -> update( $product, $promotionRequest, $promotion );
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
        $this -> theRepository -> destroy( $product, $promotion );
    }
}
