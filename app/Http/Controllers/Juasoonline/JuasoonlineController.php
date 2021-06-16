<?php

namespace App\Http\Controllers\Juasoonline;

use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use App\Models\Store\Store;
use App\Repositories\Juasoonline\JuasoonlineRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class JuasoonlineController extends Controller
{
    private JuasoonlineRepositoryInterface $theRepository;

    /**
     * JuasoonlineController constructor.
     * @param JuasoonlineRepositoryInterface $juasoonlineRepository
     */
    public function __construct( JuasoonlineRepositoryInterface $juasoonlineRepository )
    {
        $this -> theRepository = $juasoonlineRepository;
    }

    /**
     * @return AnonymousResourceCollection
     */
    public function products() : AnonymousResourceCollection
    {
        return $this -> theRepository -> products();
    }

    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function product( Product $product ) : JsonResponse
    {
        return $this -> theRepository -> product( $product );
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function recommendations( Request $request ) : JsonResponse
    {
        return $this -> theRepository -> recommendations( $request );
    }

    /**
     * @param Store $store
     * @return JsonResponse
     */
    public function storeProducts( Store $store ) : JsonResponse
    {
        return $this -> theRepository -> storeProducts( $store );
    }

    /**
     * @param Product $product
     * @return AnonymousResourceCollection
     */
    public function storeRecommendations( Product $product ) : AnonymousResourceCollection
    {
        return $this -> theRepository -> storeRecommendations( $product );
    }

    /**
     * @return JsonResponse
     */
    public function deals() : JsonResponse
    {
        return $this -> theRepository -> deals();
    }

    /**
     * @return JsonResponse
     */
    public function storeAds() : JsonResponse
    {
        return $this -> theRepository -> storeAds();
    }

    /**
     * @return JsonResponse
     */
    public function categories() : JsonResponse
    {
        return $this -> theRepository -> categories();
    }
}
