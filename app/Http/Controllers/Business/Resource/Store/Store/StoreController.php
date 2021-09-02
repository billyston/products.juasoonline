<?php

namespace App\Http\Controllers\Business\Resource\Store\Store;

use App\Repositories\Business\Resource\Store\Store\StoreRepositoryInterface;
use App\Http\Requests\Business\Resource\Store\Store\StoreRequest;
use App\Models\Business\Store\Store\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class StoreController extends Controller
{
    private StoreRepositoryInterface $theRepository;

    /**
     * CustomerStoreController constructor.
     * @param StoreRepositoryInterface $storeRepository
     */
    public function __construct( StoreRepositoryInterface $storeRepository )
    {
        $this -> theRepository = $storeRepository;
    }

    /**
     * @param StoreRequest $storeRequest
     * @return JsonResponse|mixed
     */
    public function store( StoreRequest $storeRequest ) : JsonResponse
    {
        return $this -> theRepository -> store( $storeRequest );
    }

    /**
     * @param Store $store
     * @return JsonResponse|mixed
     */
    public function show( Store $store ) : JsonResponse
    {
        return $this -> theRepository -> show( $store );
    }

    /**
     * @param StoreRequest $storeRequest
     * @param Store $store
     * @return JsonResponse|mixed
     */
    public function update( StoreRequest $storeRequest, Store $store ) : JsonResponse
    {
        return $this -> theRepository -> update( $storeRequest, $store );
    }
}
