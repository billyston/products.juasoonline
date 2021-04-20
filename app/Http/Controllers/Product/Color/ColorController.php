<?php

namespace App\Http\Controllers\Product\Color;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\Color\ColorRequest;
use App\Models\Product\Color\Color;
use App\Models\Product\Product;
use App\Repositories\Product\Color\ColorRepositoryInterface;
use Illuminate\Http\JsonResponse;

class ColorController extends Controller
{
    private ColorRepositoryInterface $theRepository;

    /**
     * @param ColorRepositoryInterface $colorRepository
     */
    public function __construct( ColorRepositoryInterface $colorRepository )
    {
        $this -> theRepository = $colorRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Product $theProduct
     * @return JsonResponse
     */
    public function index( Product $theProduct ) : JsonResponse
    {
        return $this -> theRepository -> index( $theProduct );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ColorRequest $colorRequest
     * @param Product $theProduct
     * @return JsonResponse
     */
    public function store( ColorRequest $colorRequest, Product $theProduct ) : JsonResponse
    {
        return $this -> theRepository -> store( $colorRequest, $theProduct );
    }

    /**
     * Display the specified resource.
     *
     * @param Color $color
     * @param Product $product
     * @return JsonResponse
     */
    public function show( Color $color, Product $product ) : JsonResponse
    {
        return $this -> theRepository -> show( $color, $product );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ColorRequest $colorRequest
     * @param Color $color
     * @return JsonResponse
     */
    public function update( ColorRequest $colorRequest, Color $color ) : JsonResponse
    {
        return $this -> theRepository -> update( $colorRequest, $color );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Color $color
     * @return JsonResponse
     */
    public function destroy( Color $color ) : JsonResponse
    {
        return $this -> theRepository -> destroy( $color );
    }
}
