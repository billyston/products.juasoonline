<?php

namespace App\Repositories\Business\Juaso\Country;

use App\Http\Resources\Juaso\Country\CountryResource;
use App\Models\Juaso\Country\Country;
use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class JuasoCountryRepository implements JuasoCountryRepositoryInterface
{
    use apiResponseBuilder, Relatives;

    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse
    {
        $Country = Country::query() -> when( $this -> loadRelationships(), function ( Builder $builder ) { return $builder -> with ( $this -> relationships ); }) -> get();
        return $this -> successResponse( CountryResource::collection( $Country ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param Country $country
     * @return JsonResponse
     */
    public function show( Country $country ) : JsonResponse
    {
        if ( $this -> loadRelationships() ) { $country -> load( $this -> relationships ); }
        return $this -> successResponse( new CountryResource( $country ), "Success", null, Response::HTTP_OK );
    }
}
