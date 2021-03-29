<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Http\Requests\Store\StoreRequest;
use App\Models\Store\Store;
use App\Repositories\Store\StoreRepositoryInterface;

class StoreController extends Controller
{
    private $theRepository;

    /**
     * StoreController constructor.
     * @param StoreRepositoryInterface $storeRepository
     */
    public function __construct( StoreRepositoryInterface $storeRepository )
    {
        $this -> theRepository = $storeRepository;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        return $this -> theRepository -> index();
    }

    /**
     * @param StoreRequest $storeRequest
     * @return mixed
     */
    public function store( StoreRequest $storeRequest )
    {
        logger( $storeRequest );
        return $this -> theRepository ->-> store( $storeRequest );
    }

    /**
     * @param Store $store
     * @return mixed
     */
    public function show( Store $store )
    {
        return $this -> theRepository -> show( $store );
    }

    /**
     * @param StoreRequest $storeRequest
     * @param Store $store
     * @return mixed
     */
    public function update( StoreRequest $storeRequest, Store $store )
    {
        return $this -> theRepository -> update( $storeRequest, $store );
    }

    /**
     * @param Store $store
     * @return mixed
     */
    public function destroy( Store $store )
    {
        return $this -> theRepository -> destroy( $store );
    }
}
