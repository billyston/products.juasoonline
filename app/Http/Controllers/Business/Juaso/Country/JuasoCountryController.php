<?php

namespace App\Http\Controllers\Business\Juaso\Country;

use App\Repositories\Business\Juaso\Country\JuasoCountryRepositoryInterface;
use App\Models\Juaso\Country\Country;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class JuasoCountryController extends Controller
{
    private JuasoCountryRepositoryInterface $theRepository;

    /**
     * JuasoCountryController constructor.
     * @param JuasoCountryRepositoryInterface $juasoCountryRepository
     */
    public function __construct( JuasoCountryRepositoryInterface $juasoCountryRepository )
    {
        $this -> theRepository = $juasoCountryRepository;
    }

    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse
    {
        return $this -> theRepository -> index();
    }

    /**
     * @param Country $Country
     * @return JsonResponse
     */
    public function show( Country $Country ) : JsonResponse
    {
        return $this -> theRepository -> show( $Country );
    }
}
