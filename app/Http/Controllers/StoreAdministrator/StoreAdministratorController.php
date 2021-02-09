<?php

namespace App\Http\Controllers\StoreAdministrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdministrator\StoreAdministratorRequest;
use App\Models\StoreAdministrator\StoreAdministrator;
use App\Repositories\StoreAdministrator\StoreAdministratorRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StoreAdministratorController extends Controller
{
    private $theRepository;

    /**
     * AdministratorController constructor.
     * @param StoreAdministratorRepositoryInterface $storeAdministratorRepository
     */
    public function __construct( StoreAdministratorRepositoryInterface $storeAdministratorRepository )
    {
        $this -> theRepository = $storeAdministratorRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index() : JsonResponse
    {
        return $this -> theRepository -> index();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreAdministratorRequest $storeAdministratorRequest
     * @return JsonResponse
     */
    public function store( StoreAdministratorRequest $storeAdministratorRequest ) : JsonResponse
    {
        return $this -> theRepository -> store( $storeAdministratorRequest );
    }

    /**
     * Display the specified resource.
     *
     * @param StoreAdministrator $storeAdministrator
     * @return JsonResponse
     */
    public function show( StoreAdministrator $storeAdministrator ) : JsonResponse
    {
        return $this -> theRepository -> show( $storeAdministrator );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreAdministratorRequest $storeAdministratorRequest
     * @param StoreAdministrator $storeAdministrator
     * @return JsonResponse
     */
    public function update( StoreAdministratorRequest $storeAdministratorRequest, StoreAdministrator $storeAdministrator ) : JsonResponse
    {
        return $this -> theRepository -> update( $storeAdministratorRequest, $storeAdministrator );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param StoreAdministrator $storeAdministrator
     * @return JsonResponse
     */
    public function destroy( StoreAdministrator $storeAdministrator ) : JsonResponse
    {
        return $this -> theRepository -> destroy( $storeAdministrator );
    }
}
