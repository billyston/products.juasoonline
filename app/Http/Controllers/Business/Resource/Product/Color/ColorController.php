<?php

namespace App\Http\Controllers\Business\Resource\Product\Color;

use App\Repositories\Business\Resource\Product\Color\ColorRepositoryInterface;
use App\Http\Requests\Business\Resource\Product\Color\ColorRequest;
use App\Models\Business\Product\Color\Color;
use App\Models\Business\Product\Product\Product;

use App\Http\Controllers\Controller;
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
     * @param ColorRequest $colorRequest
     * @return JsonResponse
     */
    public function store( Product $product, ColorRequest $colorRequest  ) : JsonResponse
    {
        return $this -> theRepository -> store( $product, $colorRequest );
    }

    /**
     * Display the specified resource.
     *
     * @param Color $color
     * @param Product $product
     * @return JsonResponse
     */
    public function show( Product $product, Color $color ) : JsonResponse
    {
        return $this -> theRepository -> show( $product, $color );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Product $product
     * @param ColorRequest $colorRequest
     * @param Color $color
     * @return JsonResponse
     */
    public function update( Product $product, ColorRequest $colorRequest, Color $color ) : JsonResponse
    {
        return $this -> theRepository -> update( $product, $colorRequest, $color );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @param Color $color
     * @return JsonResponse
     */
    public function destroy( Product $product, Color $color ) : JsonResponse
    {
        return $this -> theRepository -> destroy( $product, $color );
    }
}
