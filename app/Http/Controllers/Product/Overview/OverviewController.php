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
    private $theRepository;

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
    public function store( OverviewRequest $overviewRequest, Product $product ) : JsonResponse
    {
        return $this -> theRepository -> store( $overviewRequest, $product );
    }

    /**
     * Display the specified resource.
     * @param Overview $overview
     * @return JsonResponse
     */
    public function show( Overview $overview ) : JsonResponse
    {
        return $this -> theRepository -> show( $overview );
    }

    /**
     * Update the specified resource in storage.
     * @param OverviewRequest $overviewRequest
     * @param Overview $overview
     * @return JsonResponse
     */
    public function update( OverviewRequest $overviewRequest, Overview $overview ) : JsonResponse
    {
        return $this -> theRepository -> update( $overviewRequest, $overview );
    }

    /**
     * Remove the specified resource from storage.
     * @param Overview $overview
     * @return JsonResponse
     */
    public function destroy( Overview $overview ) : JsonResponse
    {
        return $this -> theRepository -> destroy( $overview );
    }
}
