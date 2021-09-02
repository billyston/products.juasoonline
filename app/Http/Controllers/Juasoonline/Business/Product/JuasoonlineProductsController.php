<?php

namespace App\Http\Controllers\Juasoonline\Business\Product;

use App\Models\Business\Product\Product\Product;
use App\Repositories\Juasoonline\Business\Product\JuasoonlineProductsRepositoryInterface;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class JuasoonlineProductsController extends Controller
{
    private JuasoonlineProductsRepositoryInterface $theRepository;

    /**
     * JuasoonlineController constructor.
     * @param JuasoonlineProductsRepositoryInterface $juasoonlineProductsRepository
     */
    public function __construct( JuasoonlineProductsRepositoryInterface $juasoonlineProductsRepository )
    {
        $this -> theRepository = $juasoonlineProductsRepository;
    }

    /**
     * @return AnonymousResourceCollection
     */
    public function getProducts() : AnonymousResourceCollection
    {
        return $this -> theRepository -> getProducts();
    }

    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function getProduct( Product $product ) : JsonResponse
    {
        return $this -> theRepository -> getProduct( $product );
    }

    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function getProductRecommendations( Product $product ) : JsonResponse
    {
        return $this -> theRepository -> getProductRecommendations( $product );
    }
}
