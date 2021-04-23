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
    public function store( Product $product, OverviewRequest $overviewRequest ) : JsonResponse;

    /**
     * @param Product $product
     * @param Overview $overview
     * @return JsonResponse
     */
    public function show( Product $product, Overview $overview ) : JsonResponse;

    /**
     * @param Product $product
     * @param OverviewRequest $overviewRequest
     * @param Overview $overview
     * @return JsonResponse
     */
    public function update( Product $product, OverviewRequest $overviewRequest, Overview $overview ) : JsonResponse;

    /**
     * @param Product $product
     * @param Overview $overview
     * @return JsonResponse
     */
    public function destroy( Product $product, Overview $overview ) : JsonResponse;
}
