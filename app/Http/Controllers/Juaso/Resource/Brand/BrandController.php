<?php

namespace App\Http\Controllers\Juaso\Resource\Brand;

use App\Repositories\Juaso\Resource\Brand\BrandRepositoryInterface;
use App\Models\Juaso\Brand\Brand;
use App\Http\Requests\Juaso\Resource\Brand\BrandRequest;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class BrandController extends Controller
{
    private BrandRepositoryInterface $theRepository;

    /**
     * CategoryController constructor.
     * @param BrandRepositoryInterface $brandRepository
     */
    public function __construct( BrandRepositoryInterface $brandRepository )
    {
        $this -> theRepository = $brandRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index() : JsonResponse
    {
        return $this -> theRepository -> index();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param BrandRequest $brandRequest
     * @return JsonResponse
     */
    public function store( BrandRequest $brandRequest ) : JsonResponse
    {
        return $this -> theRepository -> store( $brandRequest );
    }

    /**
     * Display the specified resource.
     *
     * @param Brand $brand
     * @return JsonResponse
     */
    public function show( Brand $brand ) : JsonResponse
    {
        return $this -> theRepository -> show( $brand );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param BrandRequest $brandRequest
     * @param Brand $brand
     * @return JsonResponse
     */
    public function update( BrandRequest $brandRequest, Brand $brand ) : JsonResponse
    {
        return $this -> theRepository -> update( $brandRequest, $brand );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Brand $brand
     * @return JsonResponse
     */
    public function destroy( Brand $brand ) : JsonResponse
    {
        return $this -> theRepository -> destroy( $brand );
    }
}
