<?php

namespace App\Repositories\Business\Juaso\PromoType;

use App\Http\Resources\Juaso\PromoType\PromoTypeResource;
use App\Models\Juaso\PromoType\PromoType;
use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class JuasoPromoTypeRepository implements JuasoPromoTypeRepositoryInterface
{
    use apiResponseBuilder, Relatives;

    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse
    {
        $PromoType = PromoType::query() -> when( $this -> loadRelationships(), function ( Builder $builder ) { return $builder -> with ( $this -> relationships ); }) -> get();
        return $this -> successResponse( PromoTypeResource::collection( $PromoType ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param PromoType $promoType
     * @return JsonResponse
     */
    public function show( PromoType $promoType ) : JsonResponse
    {
        if ( $this -> loadRelationships() ) { $promoType -> load( $this -> relationships ); }
        return $this -> successResponse( new PromoTypeResource( $promoType ), "Success", null, Response::HTTP_OK );
    }
}
