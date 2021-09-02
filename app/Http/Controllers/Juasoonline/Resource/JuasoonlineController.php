<?php

namespace App\Http\Controllers\Juasoonline\Resource;

use App\Repositories\Juasoonline\Resource\JuasoonlineRepositoryInterface;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

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
     * @return JsonResponse
     */
    public function quickDeals() : JsonResponse
    {
        return $this -> theRepository -> quickDeals();
    }

    /**
     * @return JsonResponse
     */
    public function sliderAds() : JsonResponse
    {
        return $this -> theRepository -> sliderAds();
    }
}
