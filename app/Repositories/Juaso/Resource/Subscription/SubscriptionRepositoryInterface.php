<?php

namespace App\Repositories\Juaso\Resource\Subscription;

use App\Http\Requests\Juaso\Resource\VendorSubscription\VendorSubscriptionRequest;
use App\Models\Juaso\Subscription\Subscription;
use Illuminate\Http\JsonResponse;

interface SubscriptionRepositoryInterface
{
    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse;

    /**
     * @param VendorSubscriptionRequest $vendorSubscriptionRequest
     * @return JsonResponse
     */
    public function store( VendorSubscriptionRequest $vendorSubscriptionRequest ) : JsonResponse;

    /**
     * @param Subscription $vendorSubscription
     * @return JsonResponse
     */
    public function show(Subscription $vendorSubscription ) : JsonResponse;

    /**
     * @param VendorSubscriptionRequest $vendorSubscriptionRequest
     * @param Subscription $vendorSubscription
     * @return JsonResponse
     */
    public function update(VendorSubscriptionRequest $vendorSubscriptionRequest, Subscription $vendorSubscription ) : JsonResponse;

    /**
     * @param Subscription $vendorSubscription
     * @return JsonResponse
     */
    public function destroy(Subscription $vendorSubscription ) : JsonResponse;
}
