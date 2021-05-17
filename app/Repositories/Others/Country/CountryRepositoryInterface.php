<?php

namespace App\Repositories\Others\Country;

use App\Http\Requests\Others\Country\CountryRequest;
use App\Models\Others\Country\Country;
use Illuminate\Http\JsonResponse;

interface CountryRepositoryInterface
{
    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse;

    /**
     * @param CountryRequest $countryRequest
     * @return JsonResponse|mixed
     */
    public function store( CountryRequest $countryRequest ) : JsonResponse;

    /**
     * @param Country $country
     * @return JsonResponse|mixed
     */
    public function show( Country $country ) : JsonResponse;

    /**
     * @param CountryRequest $countryRequest
     * @param Country $country
     * @return JsonResponse|mixed
     */
    public function update( CountryRequest $countryRequest, Country $country ) : JsonResponse;

    /**
     * @param Country $country
     * @return JsonResponse
     */
    public function destroy( Country $country ) : JsonResponse;
}
