<?php

namespace App\Repositories\Business\Resource\Store\Follower;

use App\Http\Resources\Juasoonline\Resource\Customer\Customer\CustomerResource;
use App\Models\Business\Store\Store\Store;

use App\Models\Juasoonline\Customer\Customer\Customer;
use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class FollowerRepository implements FollowerRepositoryInterface
{
    use apiResponseBuilder; use Relatives;

    /**
     * @param Store $store
     * @return JsonResponse
     */
    public function index( Store $store ) : JsonResponse
    {
        return $this -> successResponse( CustomerResource::collection(  $store -> followers() -> get() ), 'Success', '', Response::HTTP_OK );
    }

    /**
     * @param Store $store
     * @param Customer $customer
     * @return JsonResponse
     */
    public function show( Store $store, Customer $customer ) : JsonResponse
    {
        return $this -> successResponse( CustomerResource::collection(  $store -> follower() -> get() ), 'Success', '', Response::HTTP_OK );
    }
}
