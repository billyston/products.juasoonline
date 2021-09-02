<?php

namespace App\Http\Controllers\Business\Resource\Store\Charge;

use App\Repositories\Business\Resource\Store\Charge\ChargeRepositoryInterface;
use App\Models\Business\Store\Charge\Charge;
use App\Models\Business\Store\Store\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

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
}
