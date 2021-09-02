<?php

namespace App\Http\Controllers\Business\Juaso\PromoType;

use App\Repositories\Business\Juaso\PromoType\JuasoPromoTypeRepositoryInterface;
use App\Models\Juaso\PromoType\PromoType;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class JuasoPromoTypeController extends Controller
{
    private JuasoPromoTypeRepositoryInterface $theRepository;

    /**
     * JuasoPromoTypeController constructor.
     * @param JuasoPromoTypeRepositoryInterface $juasoPromoTypeRepository
     */
    public function __construct( JuasoPromoTypeRepositoryInterface $juasoPromoTypeRepository )
    {
        $this -> theRepository = $juasoPromoTypeRepository;
    }

    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse
    {
        return $this -> theRepository -> index();
    }

    /**
     * @param PromoType $PromoType
     * @return JsonResponse
     */
    public function show( PromoType $PromoType ) : JsonResponse
    {
        return $this -> theRepository -> show( $PromoType );
    }
}
