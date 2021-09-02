<?php

namespace App\Http\Controllers\Juaso\Business\Product\Product;

use App\Models\Business\Product\Product\Product;

use App\Http\Controllers\Controller;
use App\Repositories\Juaso\Business\Product\JuasoProductRepositoryInterface;
use Illuminate\Http\JsonResponse;

class JuasoProductController extends Controller
{
    private JuasoProductRepositoryInterface $theRepository;

    /**
     * JuasoProductController constructor.
     * @param JuasoProductRepositoryInterface $juasoProductRepository
     */
    public function __construct( JuasoProductRepositoryInterface $juasoProductRepository )
    {
        $this -> theRepository = $juasoProductRepository;
    }

    /**
     * @return JsonResponse
     */
    public function index () : JsonResponse
    {
        return $this -> theRepository -> index();
    }

    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function show ( Product $product ) : JsonResponse
    {
        return $this -> theRepository -> show( $product );
    }

    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function destroy ( Product $product ) : JsonResponse
    {
        return $this -> theRepository -> destroy( $product );
    }
}
