<?php

namespace App\Repositories\Juaso\Business\Store\Charge;

use App\Http\Requests\Business\Resource\Store\Charge\ChargeRequest;
use App\Http\Resources\Business\Resource\Store\Charge\ChargeResource;
use App\Jobs\Business\Resource\Store\Charge\CreateCharge;
use App\Jobs\Business\Resource\Store\Charge\UpdateCharge;
use App\Models\Business\Store\Charge\Charge;
use App\Models\Business\Store\Store\Store;

use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Exception;

class JuasoChargeRepository implements JuasoChargeRepositoryInterface
{
    use apiResponseBuilder; use Relatives;

    /**
     * @param Store $store
     * @return JsonResponse
     */
    public function index( Store $store ) : JsonResponse
    {
        return $this -> successResponse( ChargeResource::collection( $store -> charges() -> paginate() ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param Store $store
     * @param ChargeRequest $chargeRequest
     * @return JsonResponse|mixed
     */
    public function store( Store $store, ChargeRequest $chargeRequest ) : JsonResponse
    {
        return $this -> successResponse( ( new CreateCharge( $store, $chargeRequest ) ) -> handle(), "Success", "Charge created", Response::HTTP_CREATED );
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
}
