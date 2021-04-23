<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Http\Requests\Store\StoreRequest;
use App\Models\Store\Store;
use App\Repositories\Store\StoreRepositoryInterface;
use Illuminate\Http\JsonResponse;

class StoreController extends Controller
{
    private StoreRepositoryInterface $theRepository;

    /**
     * StoreController constructor.
     * @param StoreRepositoryInterface $storeRepository
     */
    public function __construct( StoreRepositoryInterface $storeRepository )
    {
        $this -> theRepository = $storeRepository;
    }

    /**
     * @return JsonResponse|mixed
     */
    public function index() : JsonResponse
    {
        return $this -> theRepository -> index();
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

    /**
     * @param Store $store
     * @return JsonResponse|mixed
     */
    public function destroy( Store $store ) : JsonResponse
    {
        return $this -> theRepository -> destroy( $store );
    }
}
