<?php

namespace App\Http\Controllers\Juasoonline\Resource\Customer\Store;

use App\Repositories\Juasoonline\Resource\Customer\Store\CustomerStoreRepositoryInterface;
use App\Models\Business\Store\Store\Store;
use App\Models\Juasoonline\Customer\Customer\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class CustomerStoreController extends Controller
{
    private CustomerStoreRepositoryInterface $theRepository;

    /**
     * CustomerStoreController constructor.
     * @param CustomerStoreRepositoryInterface $customerStoreRepository
     */
    public function __construct( CustomerStoreRepositoryInterface $customerStoreRepository )
    {
        $this -> theRepository = $customerStoreRepository;
    }

    /**
     * @param Customer $customer
     * @return JsonResponse
     */
    public function getStores( Customer $customer ) : JsonResponse
    {
        return $this -> theRepository -> getStores( $customer );
    }

    /**
     * @param Customer $customer
     * @param Store $store
     * @return JsonResponse
     */
    public function follow( Customer $customer, Store $store ) : JsonResponse
    {
        return $this -> theRepository -> follow( $customer, $store );
    }

    /**
     * @param Customer $customer
     * @param Store $store
     * @return JsonResponse
     */
    public function unfollow( Customer $customer, Store $store ) : JsonResponse
    {
        return $this -> theRepository -> unfollow( $customer, $store );
    }
}
