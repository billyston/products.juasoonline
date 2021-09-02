<?php

namespace App\Repositories\Business\Resource\Store\Charge;

use App\Models\Business\Store\Charge\Charge;
use App\Models\Business\Store\Store\Store;
use Illuminate\Http\JsonResponse;

interface ChargeRepositoryInterface
{
    /**
     * @param Store $store
     * @return JsonResponse
     */
    public function index( Store $store ) : JsonResponse;

    /**
     * @param Store $store
     * @param Charge $charge
     * @return JsonResponse
     */
    public function show( Store $store, Charge $charge ) : JsonResponse;
}
