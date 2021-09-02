<?php

namespace App\Http\Controllers\Juaso\Resource\Subscription;

use App\Repositories\Juaso\Resource\Subscription\SubscriptionRepositoryInterface;
use App\Http\Requests\Juaso\Resource\VendorSubscription\VendorSubscriptionRequest;
use App\Models\Juaso\Subscription\Subscription;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class SubscriptionController extends Controller
{
    private SubscriptionRepositoryInterface $theRepository;

    /**
     * SubcategoryController constructor.
     * @param SubscriptionRepositoryInterface $vendorSubscriptionRepository
     */
    public function __construct(SubscriptionRepositoryInterface $vendorSubscriptionRepository )
    {
        $this -> theRepository = $vendorSubscriptionRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index() : JsonResponse
    {
        return $this -> theRepository -> index();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param VendorSubscriptionRequest $vendorSubscriptionRequest
     * @return JsonResponse
     */
    public function store( VendorSubscriptionRequest $vendorSubscriptionRequest ) : JsonResponse
    {
        return $this -> theRepository -> store( $vendorSubscriptionRequest );
    }

    /**
     * Display the specified resource.
     *
     * @param Subscription $vendorSubscription
     * @return JsonResponse
     */
    public function show(Subscription $vendorSubscription ) : JsonResponse
    {
        return $this -> theRepository -> show( $vendorSubscription );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param VendorSubscriptionRequest $vendorSubscriptionRequest
     * @param Subscription $vendorSubscription
     * @return JsonResponse
     */
    public function update(VendorSubscriptionRequest $vendorSubscriptionRequest, Subscription $vendorSubscription ) : JsonResponse
    {
        return $this -> theRepository -> update( $vendorSubscriptionRequest, $vendorSubscription );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Subscription $vendorSubscription
     * @return JsonResponse
     */
    public function destroy(Subscription $vendorSubscription ) : JsonResponse
    {
        return $this -> theRepository -> destroy( $vendorSubscription );
    }
}
