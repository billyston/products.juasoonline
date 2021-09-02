<?php

namespace App\Http\Controllers\Juaso\Business\Store\Charge;

use App\Http\Controllers\Controller;
use App\Http\Requests\Business\Resource\Store\Charge\ChargeRequest;
use App\Models\Business\Store\Charge\Charge;
use App\Models\Business\Store\Store\Store;
use App\Repositories\Juaso\Business\Store\Charge\JuasoChargeRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class JuasoChargeController extends Controller
{
    private JuasoChargeRepositoryInterface $theRepository;

    public function __construct( JuasoChargeRepositoryInterface $juasoChargeRepository )
    {
        $this -> theRepository = $juasoChargeRepository;
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
     * @return JsonResponse|mixed
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
}
