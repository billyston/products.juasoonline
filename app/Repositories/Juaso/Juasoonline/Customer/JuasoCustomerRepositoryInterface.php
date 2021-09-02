<?php

namespace App\Repositories\Juaso\Juasoonline\Customer;

use App\Models\Juasoonline\Customer\Customer\Customer;

use Illuminate\Http\JsonResponse;

interface JuasoCustomerRepositoryInterface
{
    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse;

    /**
     * @param Customer $customer
     * @return JsonResponse
     */
    public function show( Customer $customer ) : JsonResponse;

    /**
     * @param Customer $customer
     * @return JsonResponse
     */
    public function destroy( Customer $customer ) : JsonResponse;
}
