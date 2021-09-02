<?php

namespace App\Http\Controllers\Juaso\Resource\PromoType;

use App\Repositories\Juaso\Resource\PromoType\PromoTypeRepositoryInterface;
use App\Http\Requests\Juaso\Resource\PromoType\PromoTypeRequest;
use App\Models\Juaso\PromoType\PromoType;

use App\Http\Controllers\Controller;
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
