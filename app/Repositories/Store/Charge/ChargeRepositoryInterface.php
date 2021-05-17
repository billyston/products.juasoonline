<?php

namespace App\Repositories\Store\Charge;

use App\Http\Requests\Store\Charge\ChargeRequest;
use App\Models\Store\Charge\Charge;
use App\Models\Store\Store;
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
     * @param ChargeRequest $chargeRequest
     * @return JsonResponse
     */
    public function store( Store $store, ChargeRequest $chargeRequest ) : JsonResponse;

    /**
     * @param Store $store
     * @param Charge $charge
     * @return JsonResponse
     */
    public function show( Store $store, Charge $charge ) : JsonResponse;

    /**
     * @param Store $store
     * @param ChargeRequest $chargeRequest
     * @param Charge $charge
     * @return JsonResponse
     */
    public function update( Store $store, ChargeRequest $chargeRequest, Charge $charge ) : JsonResponse;

    /**
     * @param Store $store
     * @param Charge $charge
     * @return JsonResponse
     */
    public function destroy( Store $store, Charge $charge ) : JsonResponse;
}
