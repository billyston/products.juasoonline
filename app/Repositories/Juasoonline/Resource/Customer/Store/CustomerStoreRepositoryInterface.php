<?php

namespace App\Repositories\Juasoonline\Resource\Customer\Store;

use App\Models\Business\Store\Store\Store;
use App\Models\Juasoonline\Customer\Customer\Customer;
use Illuminate\Http\JsonResponse;

interface CustomerStoreRepositoryInterface
{
    /**
     * @param Customer $customer
     * @return JsonResponse
     */
    public function getStores( Customer $customer ) : JsonResponse;

    /**
     * @param Customer $customer
     * @param Store $store
     * @return JsonResponse
     */
    public function follow( Customer $customer, Store $store ) : JsonResponse;

    /**
     * @param Customer $customer
     * @param Store $store
     * @return JsonResponse
     */
    public function unfollow( Customer $customer, Store $store ) : JsonResponse;
}
