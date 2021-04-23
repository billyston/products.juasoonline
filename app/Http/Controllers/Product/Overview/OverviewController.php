<?php

namespace App\Http\Controllers\Product\Overview;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\Overview\OverviewRequest;
use App\Models\Product\Overview\Overview;
use App\Models\Product\Product;
use App\Repositories\Product\Overview\OverviewRepositoryInterface;
use Illuminate\Http\JsonResponse;

class OverviewController extends Controller
{
    private OverviewRepositoryInterface $theRepository;

    /**
     * OverviewController constructor.
     * @param OverviewRepositoryInterface $overviewRepository
     */
    public function __construct( OverviewRepositoryInterface $overviewRepository )
    {
        $this -> theRepository = $overviewRepository;
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
     * @param OverviewRequest $overviewRequest
     * @param Product $product
     * @return JsonResponse
     */
    public function store( Product $product, OverviewRequest $overviewRequest ) : JsonResponse
    {
        return $this -> theRepository -> store( $product, $overviewRequest );
    }

    /**
     * Display the specified resource.
     * @param Product $product
     * @param Overview $overview
     * @return JsonResponse
     */
    public function show( Product $product, Overview $overview ) : JsonResponse
    {
        return $this -> theRepository -> show( $product, $overview );
    }

    /**
     * Update the specified resource in storage.
     * @param Product $product
     * @param OverviewRequest $overviewRequest
     * @param Overview $overview
     * @return JsonResponse
     */
    public function update( Product $product, OverviewRequest $overviewRequest, Overview $overview ) : JsonResponse
    {
        return $this -> theRepository -> update( $product, $overviewRequest, $overview );
    }

    /**
     * Remove the specified resource from storage.
     * @param Product $product
     * @param Overview $overview
     * @return JsonResponse
     */
    public function destroy( Product $product, Overview $overview ) : JsonResponse
    {
        return $this -> theRepository -> destroy( $product, $overview );
    }
}
