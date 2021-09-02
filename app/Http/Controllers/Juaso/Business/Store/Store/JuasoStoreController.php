<?php

namespace App\Http\Controllers\Juaso\Business\Store\Store;

use App\Models\Business\Store\Store\Store;

use App\Http\Controllers\Controller;
use App\Repositories\Juaso\Business\Store\JuasoStoreRepositoryInterface;
use Illuminate\Http\JsonResponse;

class JuasoStoreController extends Controller
{
    private JuasoStoreRepositoryInterface $theRepository;

    /**
     * JuasoStoreController constructor.
     * @param JuasoStoreRepositoryInterface $juasoStoreRepository
     */
    public function __construct( JuasoStoreRepositoryInterface $juasoStoreRepository )
    {
        $this -> theRepository = $juasoStoreRepository;
    }

    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse
    {
        return $this -> theRepository -> index();
    }

    /**
     * @param Store $store
     * @return JsonResponse|mixed
     */
    public function show( Store $store ) : JsonResponse
    {
        return $this -> theRepository -> show( $store );
    }

    /**
     * @param Store $store
     * @return JsonResponse
     */
    public function destroy( Store $store ) : JsonResponse
    {
        return $this -> theRepository -> destroy( $store );
    }
}
