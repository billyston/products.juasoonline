<?php

namespace App\Http\Controllers\Store\Charge;

use App\Http\Controllers\Controller;
use App\Http\Requests\Store\Charge\ChargeRequest;
use App\Models\Store\Charge\Charge;
use App\Models\Store\Store;
use App\Repositories\Store\Charge\ChargeRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ChargeController extends Controller
{
    private ChargeRepositoryInterface $theRepository;

    /**
     * BranchController constructor.
     * @param ChargeRepositoryInterface $chargeRepository
     */
    public function __construct( ChargeRepositoryInterface $chargeRepository )
    {
        $this -> theRepository = $chargeRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Store $store
     * @return JsonResponse
     */
    public function index( Store $store ) : JsonResponse
    {
        return $this -> theRepository -> index( $store );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Store $store
     * @param ChargeRequest $chargeRequest
     * @return JsonResponse
     */
    public function store( Store $store, ChargeRequest $chargeRequest ) : JsonResponse
    {
        return $this -> theRepository -> store( $store, $chargeRequest );
    }

    /**
     * Display the specified resource.
     *
     * @param Store $store
     * @param Charge $charge
     * @return JsonResponse
     */
    public function show( Store $store, Charge $charge ) : JsonResponse
    {
        return $this -> theRepository -> show( $store, $charge );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Store $store
     * @param ChargeRequest $chargeRequest
     * @param Charge $charge
     * @return JsonResponse
     */
    public function update( Store $store, ChargeRequest $chargeRequest, Charge $charge ) : JsonResponse
    {
        return $this -> theRepository -> update( $store, $chargeRequest, $charge );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Store $store
     * @param Charge $charge
     * @return JsonResponse
     */
    public function destroy( Store $store, Charge $charge ) : JsonResponse
    {
        return $this -> theRepository -> destroy( $store, $charge );
    }
}
