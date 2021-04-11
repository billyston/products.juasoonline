<?php

namespace App\Repositories\Product\Overview;

use App\Http\Requests\Product\Overview\OverviewRequest;
use App\Models\Product\Overview\Overview;
use App\Models\Product\Product;
use Illuminate\Http\JsonResponse;

interface OverviewRepositoryInterface
{
    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function index( Product $product ) : JsonResponse;

    /**
     * @param OverviewRequest $overviewRequest
     * @param Product $product
     * @return JsonResponse
     */
    public function store( OverviewRequest $overviewRequest, Product $product ) : JsonResponse;

    /**
     * @param Overview $overview
     * @return JsonResponse
     */
    public function show( Overview $overview ) : JsonResponse;

    /**
     * @param OverviewRequest $overviewRequest
     * @param Overview $overview
     * @return JsonResponse
     */
    public function update( OverviewRequest $overviewRequest, Overview $overview ) : JsonResponse;

    /**
     * @param Overview $overview
     * @return JsonResponse
     */
    public function destroy( Overview $overview ) : JsonResponse;
}
