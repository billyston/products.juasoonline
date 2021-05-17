<?php

namespace App\Repositories\Others\PromoType;

use App\Http\Requests\Others\PromoType\PromoTypeRequest;
use App\Http\Resources\Others\PromoType\PromoTypeResource;
use App\Jobs\Others\PromoType\CreatePromoType;
use App\Jobs\Others\PromoType\UpdatePromoType;
use App\Models\Others\PromoType\PromoType;
use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class PromoTypeRepository implements PromoTypeRepositoryInterface
{
    use apiResponseBuilder, Relatives;

    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse
    {
        $PromoType = PromoType::query() -> when( $this -> loadRelationships(), function ( Builder $builder ) { return $builder -> with ( $this -> relationships ); }) -> paginate();
        return $this -> successResponse( PromoTypeResource::collection( $PromoType ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param PromoTypeRequest $promoTypeRequest
     * @return JsonResponse
     */
    public function store( PromoTypeRequest $promoTypeRequest ) : JsonResponse
    {
        return $this -> successResponse( ( new CreatePromoType( $promoTypeRequest ) ) -> handle(), "Success", "Promo type created", Response::HTTP_CREATED );
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

    /**
     * @param PromoTypeRequest $promoTypeRequest
     * @param PromoType $promoType
     * @return JsonResponse
     */
    public function update( PromoTypeRequest $promoTypeRequest, PromoType $promoType ) : JsonResponse
    {
        return $this -> successResponse( ( new UpdatePromoType( $promoTypeRequest, $promoType ) ) -> handle(), 'Success', 'Country updated', Response::HTTP_OK );
    }

    /**
     * @param PromoType $promoType
     * @return JsonResponse
     */
    public function destroy( PromoType $promoType ) : JsonResponse
    {
        $promoType -> delete();
        return $this -> successResponse( null, 'Success', 'Promo type deleted', Response::HTTP_NO_CONTENT );
    }
}
