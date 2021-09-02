<?php

namespace App\Http\Controllers\Business\Juaso\Brand;

use App\Repositories\Business\Juaso\Brand\JuasoBrandRepositoryInterface;
use App\Models\Juaso\Brand\Brand;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class JuasoBrandController extends Controller
{
    private JuasoBrandRepositoryInterface $theRepository;

    /**
     * JuasoBrandController constructor.
     * @param JuasoBrandRepositoryInterface $juasoBrandRepository
     */
    public function __construct( JuasoBrandRepositoryInterface $juasoBrandRepository )
    {
        $this -> theRepository = $juasoBrandRepository;
    }

    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse
    {
        return $this -> theRepository -> index();
    }

    /**
     * @param Brand $Brand
     * @return JsonResponse
     */
    public function show( Brand $Brand ) : JsonResponse
    {
        return $this -> theRepository -> show( $Brand );
    }
}
