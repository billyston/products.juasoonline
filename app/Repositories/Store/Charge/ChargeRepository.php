<?php

namespace App\Repositories\Store\Charge;

use App\Http\Requests\Store\Charge\ChargeRequest;
use App\Http\Resources\Store\Charge\ChargeResource;
use App\Jobs\Store\Charge\CreateCharge;
use App\Jobs\Store\Charge\UpdateCharge;
use App\Models\Store\Charge\Charge;
use App\Models\Store\Store;
use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ChargeRepository implements ChargeRepositoryInterface
{
    use apiResponseBuilder; use Relatives;

    /**
     * @param Store $store
     * @return JsonResponse|mixed
     */
    public function index( Store $store ) : JsonResponse
    {
        return $this -> successResponse( ChargeResource::collection( $store -> charges() -> paginate() ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param Store $store
     * @param ChargeRequest $chargeRequest
     * @return JsonResponse
     */
    public function store( Store $store, ChargeRequest $chargeRequest ) : JsonResponse
    {
        return $this -> successResponse( ( new CreateCharge( $chargeRequest ) ) -> handle(), "Success", "Charge created", Response::HTTP_CREATED );
    }

    /**
     * @param Store $store
     * @param Charge $charge
     * @return JsonResponse
     */
    public function show( Store $store, Charge $charge ) : JsonResponse
    {
        checkResourceRelation( $store -> charges() -> where( 'charges.id', $charge -> id ) -> count());
        if ( $this -> loadRelationships() ) { $charge -> load( $this -> relationships ); }
        return $this -> successResponse( new ChargeResource( $charge ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param Store $store
     * @param ChargeRequest $chargeRequest
     * @param Charge $charge
     * @return JsonResponse
     */
    public function update( Store $store, ChargeRequest $chargeRequest, Charge $charge ) : JsonResponse
    {
        checkResourceRelation( $store -> charges() -> where( 'charges.id', $charge -> id ) -> count());
        if ( $this -> loadRelationships() ) { $charge -> load( $this -> relationships ); }
        return $this -> successResponse( ( new UpdateCharge( $chargeRequest, $charge ) ) -> handle(), 'Success', 'Charge updated', Response::HTTP_OK );
    }

    /**
     * @param Store $store
     * @param Charge $charge
     * @return JsonResponse
     */
    public function destroy( Store $store, Charge $charge ) : JsonResponse
    {
        checkResourceRelation( $store -> charges() -> where( 'charges.id', $charge -> id ) -> count());
        $charge -> delete();
        return $this -> successResponse( null, 'Success', 'Charge deleted.', Response::HTTP_NO_CONTENT );
    }
}
