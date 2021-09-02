<?php

namespace App\Repositories\Juasoonline\Resource\Customer\Store;

use App\Http\Resources\Business\Resource\Store\Store\StoreResource;
use App\Models\Business\Store\Store\Store;
use App\Models\Juasoonline\Customer\Customer\Customer;

use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class CustomerStoreRepository implements CustomerStoreRepositoryInterface
{
    use apiResponseBuilder, Relatives;

    /**
     * @param Customer $customer
     * @return JsonResponse
     */
    public function getStores( Customer $customer ) : JsonResponse
    {
        return $this -> successResponse( StoreResource::collection(  $customer -> stores() -> get() ), 'Success', '', Response::HTTP_OK );
    }

    /**
     * @param Customer $customer
     * @param Store $store
     * @return JsonResponse
     */
    public function follow( Customer $customer, Store $store ) : JsonResponse
    {
        $follow = DB::table('customer_store') -> where('customer_id', $customer -> id ) -> where('store_id', $store -> id ) -> first();
        if ( $follow === null ) { DB::table('customer_store') -> insert(['customer_id' => $customer -> id, 'store_id' => $store -> id]); }

        return $this -> successResponse('', 'Success', 'Following ' . $store -> name, Response::HTTP_OK );
    }

    /**
     * @param Customer $customer
     * @param Store $store
     * @return JsonResponse
     */
    public function unfollow( Customer $customer, Store $store ) : JsonResponse
    {
        DB::table('customer_store') -> where('customer_id', $customer -> id ) -> where('store_id', $store -> id ) -> delete();
        return $this -> successResponse('', 'Success', 'Unfollowed ' . $store -> name, Response::HTTP_OK );
    }
}
