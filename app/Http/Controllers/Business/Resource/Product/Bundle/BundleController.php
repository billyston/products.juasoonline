<?php

namespace App\Http\Controllers\Business\Resource\Product\Bundle;

use App\Repositories\Business\Resource\Product\Bundle\BundleRepositoryInterface;
use App\Http\Requests\Business\Resource\Product\Bundle\BundleRequest;
use App\Models\Business\Product\Bundle\Bundle;
use App\Models\Business\Product\Product\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

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
