<?php

namespace App\Repositories\Juaso\Resource\Subscription;

use App\Http\Requests\Juaso\Resource\VendorSubscription\VendorSubscriptionRequest;
use App\Http\Resources\Juaso\Resource\Subscription\SubscriptionResource;
use App\Jobs\Juaso\Resource\Subscription\CreateSubscription;
use App\Jobs\Juaso\Resource\Subscription\UpdateSubscription;
use App\Models\Juaso\Subscription\Subscription;

use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Exception;

class SubscriptionRepository implements SubscriptionRepositoryInterface
{
    use apiResponseBuilder, Relatives;

    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse
    {
        $Subscription = Subscription::query() -> when( $this -> loadRelationships(), function (Builder $builder ) { return $builder -> with ( $this -> relationships ); }) -> get();
        return $this -> successResponse( SubscriptionResource::collection( $Subscription ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param VendorSubscriptionRequest $vendorSubscriptionRequest
     * @return JsonResponse
     */
    public function store( VendorSubscriptionRequest $vendorSubscriptionRequest ) : JsonResponse
    {
        return $this -> successResponse( ( new CreateSubscription( $vendorSubscriptionRequest ) ) -> handle(), "Success", "Subscription created", Response::HTTP_CREATED );
    }

    /**
     * @param Subscription $vendorSubscription
     * @return JsonResponse
     */
    public function show(Subscription $vendorSubscription ) : JsonResponse
    {
        if ( $this -> loadRelationships() ) { $vendorSubscription -> load( $this -> relationships ); }
        return $this -> successResponse( new SubscriptionResource( $vendorSubscription ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param VendorSubscriptionRequest $vendorSubscriptionRequest
     * @param Subscription $vendorSubscription
     * @return JsonResponse
     */
    public function update(VendorSubscriptionRequest $vendorSubscriptionRequest, Subscription $vendorSubscription ) : JsonResponse
    {
        return $this -> successResponse( ( new UpdateSubscription( $vendorSubscriptionRequest, $vendorSubscriptionRequest ) ) -> handle(), 'Success', 'Subscription updated', Response::HTTP_OK );
    }

    /**
     * @param Subscription $vendorSubscription
     * @return JsonResponse|mixed
     */
    public function destroy(Subscription $vendorSubscription ) : JsonResponse
    {
        try
        {
            $vendorSubscription -> delete();
            return $this -> successResponse( null, 'Success', 'Subscription deleted.', Response::HTTP_NO_CONTENT );
        }

        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
