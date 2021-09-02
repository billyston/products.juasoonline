<?php

namespace App\Repositories\Business\Resource\Store\Follower;

use App\Models\Business\Store\Store\Store;
use App\Models\Juasoonline\Customer\Customer\Customer;

use Illuminate\Http\JsonResponse;

interface FollowerRepositoryInterface
{
    /**
     * @param Store $store
     * @return JsonResponse
     */
    public function index( Store $store ) : JsonResponse;

    /**
     * @param Store $store
     * @param Customer $customer
     * @return JsonResponse
     */
    public function show( Store $store, Customer $customer ) : JsonResponse;
}
