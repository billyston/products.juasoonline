<?php

namespace App\Http\Controllers\Juasoonline;

use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use App\Repositories\Juasoonline\JuasoonlineRepositoryInterface;
use Illuminate\Http\JsonResponse;
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
}
