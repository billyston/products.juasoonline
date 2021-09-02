<?php

namespace App\Http\Controllers\Business\Resource\Store\StoreAdministrator;

use App\Http\Requests\Business\Resource\Store\StoreAdministrator\StoreAdministratorRequest;
use App\Models\Business\Store\Store\Store;
use App\Models\Business\Store\StoreAdministrator\StoreAdministrator;
use App\Repositories\Business\Resource\Store\StoreAdministrator\StoreAdministratorRepositoryInterface;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class StoreAdministratorController extends Controller
{
    private StoreAdministratorRepositoryInterface $theRepository;

    /**
     * AdministratorController constructor.
     * @param StoreAdministratorRepositoryInterface $storeAdministratorRepository
     */
    public function __construct( StoreAdministratorRepositoryInterface $storeAdministratorRepository )
    {
        $this -> theRepository = $storeAdministratorRepository;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Store $store
     * @param StoreAdministratorRequest $storeAdministratorRequest
     * @return JsonResponse
     */
    public function store( Store $store, StoreAdministratorRequest $storeAdministratorRequest ) : JsonResponse
    {
        return $this -> theRepository -> store( $store, $storeAdministratorRequest );
    }

    /**
     * Display the specified resource.
     *
     * @param Store $store
     * @param StoreAdministrator $storeAdministrator
     * @return JsonResponse
     */
    public function show( Store $store, StoreAdministrator $storeAdministrator ) : JsonResponse
    {
        return $this -> theRepository -> show( $store, $storeAdministrator );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Store $store
     * @param StoreAdministratorRequest $storeAdministratorRequest
     * @param StoreAdministrator $storeAdministrator
     * @return JsonResponse
     */
    public function update( Store $store, StoreAdministratorRequest $storeAdministratorRequest, StoreAdministrator $storeAdministrator ) : JsonResponse
    {
        return $this -> theRepository -> update( $store, $storeAdministratorRequest, $storeAdministrator );
    }
}
