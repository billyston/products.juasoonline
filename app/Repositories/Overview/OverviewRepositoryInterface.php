<?php

namespace App\Repositories\Overview;

use App\Http\Requests\Overview\OverviewRequest;
use App\Models\Overview\Overview;
use Illuminate\Http\JsonResponse;

interface OverviewRepositoryInterface
{
    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse;

    /**
     * @param OverviewRequest $overviewRequest
     * @return JsonResponse
     */
    public function store( OverviewRequest $overviewRequest ) : JsonResponse;

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
