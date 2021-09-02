<?php

namespace App\Repositories\Business\Resource\Store\Charge;

use App\Http\Resources\Business\Resource\Store\Charge\ChargeResource;
use App\Models\Business\Store\Charge\Charge;
use App\Models\Business\Store\Store\Store;

use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

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
     * @param Charge $charge
     * @return JsonResponse
     */
    public function show( Store $store, Charge $charge ) : JsonResponse
    {
        checkResourceRelation( $store -> charges() -> where( 'charges.id', $charge -> id ) -> count());
        if ( $this -> loadRelationships() ) { $charge -> load( $this -> relationships ); }
        return $this -> successResponse( new ChargeResource( $charge ), "Success", null, Response::HTTP_OK );
    }
}
