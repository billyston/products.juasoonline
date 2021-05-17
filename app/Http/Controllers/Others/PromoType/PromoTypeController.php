<?php

namespace App\Http\Controllers\Others\PromoType;

use App\Http\Controllers\Controller;
use App\Http\Requests\Others\PromoType\PromoTypeRequest;
use App\Models\Others\PromoType\PromoType;
use App\Repositories\Others\PromoType\PromoTypeRepositoryInterface;
use Illuminate\Http\JsonResponse;

class PromoTypeController extends Controller
{
    private PromoTypeRepositoryInterface $theRepository;

    /**
     * PromoTypeController constructor.
     * @param PromoTypeRepositoryInterface $promoTypeRepository
     */
    public function __construct( PromoTypeRepositoryInterface $promoTypeRepository )
    {
        $this -> theRepository = $promoTypeRepository;
    }

    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse
    {
        return $this -> theRepository -> index();
    }

    /**
     * @param PromoTypeRequest $promoTypeRequest
     * @return JsonResponse
     */
    public function store( PromoTypeRequest $promoTypeRequest ) : JsonResponse
    {
        return $this -> theRepository -> store( $promoTypeRequest );
    }

    /**
     * @param PromoType $promoType
     * @return JsonResponse
     */
    public function show( PromoType $promoType ) : JsonResponse
    {
        return $this -> theRepository -> show( $promoType );
    }

    /**
     * @param PromoTypeRequest $promoTypeRequest
     * @param PromoType $promoType
     * @return JsonResponse
     */
    public function update( PromoTypeRequest $promoTypeRequest, PromoType $promoType ) : JsonResponse
    {
        return $this -> theRepository -> update( $promoTypeRequest, $promoType );
    }

    /**
     * @param PromoType $promoType
     * @return JsonResponse
     */
    public function destroy( PromoType $promoType ) : JsonResponse
    {
        return $this -> theRepository -> destroy( $promoType );
    }
}
