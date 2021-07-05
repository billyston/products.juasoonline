<?php

namespace App\Http\Controllers\Product\Bundle;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\Bundle\BundleRequest;
use App\Models\Product\Bundle\Bundle;
use App\Models\Product\Product;
use App\Repositories\Product\Bundle\BundleRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BundleController extends Controller
{
    private BundleRepositoryInterface $theRepository;

    /**
     * @param BundleRepositoryInterface $bundleRepository
     */
    public function __construct( BundleRepositoryInterface $bundleRepository )
    {
        $this -> theRepository = $bundleRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Product $product
     * @return JsonResponse
     */
    public function index( Product $product ) : JsonResponse
    {
        return $this -> theRepository -> index( $product );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Product $product
     * @param BundleRequest $bundleRequest
     * @return JsonResponse
     */
    public function store( Product $product, BundleRequest $bundleRequest ) : JsonResponse
    {
        return $this -> theRepository -> store( $product, $bundleRequest );
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @param Bundle $bundle
     * @return JsonResponse
     */
    public function show( Product $product, Bundle $bundle ) : JsonResponse
    {
        return $this -> theRepository -> show( $product, $bundle );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Product $product
     * @param BundleRequest $bundleRequest
     * @param Bundle $bundle
     * @return JsonResponse
     */
    public function update( Product $product, BundleRequest $bundleRequest, Bundle $bundle ) : JsonResponse
    {
        return $this -> theRepository -> update( $product, $bundleRequest, $bundle );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @param Bundle $bundle
     * @return JsonResponse
     */
    public function destroy( Product $product, Bundle $bundle ) : JsonResponse
    {
        return $this -> theRepository -> destroy( $product, $bundle );
    }
}
