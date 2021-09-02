<?php

namespace App\Repositories\Business\Resource\Product\Bundle;

use App\Http\Requests\Business\Resource\Product\Bundle\BundleRequest;
use App\Http\Resources\Business\Resource\Product\Bundle\BundleResource;
use App\Jobs\Business\Resource\Product\Bundle\CreateBundle;
use App\Jobs\Business\Resource\Product\Bundle\UpdateBundle;
use App\Models\Business\Product\Bundle\Bundle;
use App\Models\Business\Product\Product\Product;

use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class BundleRepository implements BundleRepositoryInterface
{
    use apiResponseBuilder, Relatives;

    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function index( Product $product ) : JsonResponse
    {
        return $this -> successResponse( BundleResource::collection( $product -> bundles() -> paginate() ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param Product $product
     * @param BundleRequest $bundleRequest
     * @return JsonResponse
     */
    public function store( Product $product, BundleRequest $bundleRequest ) : JsonResponse
    {
        return $this -> successResponse( ( new CreateBundle( $product, $bundleRequest ) ) -> handle(), "Success", "Bundle(s) created", Response::HTTP_CREATED );
    }

    /**
     * @param Product $product
     * @param Bundle $bundle
     * @return JsonResponse
     */
    public function show( Product $product, Bundle $bundle ) : JsonResponse
    {
        checkResourceRelation( $product -> bundles() -> where( 'bundles.id', $bundle -> id ) -> count());
        if ( $this -> loadRelationships() ) { $bundle -> load( $this -> relationships ); }
        return $this -> successResponse( new BundleResource( $bundle ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param Product $product
     * @param BundleRequest $bundleRequest
     * @param Bundle $bundle
     * @return JsonResponse
     */
    public function update( Product $product, BundleRequest $bundleRequest, Bundle $bundle ) : JsonResponse
    {
        checkResourceRelation( $product -> bundles() -> where( 'bundles.id', $bundle -> id ) -> count());
        return $this -> successResponse( ( new UpdateBundle( $bundleRequest, $bundle ) ) -> handle(), 'Success', 'Bundle updated', Response::HTTP_OK );
    }

    /**
     * @param Product $product
     * @param Bundle $bundle
     * @return JsonResponse
     */
    public function destroy( Product $product, Bundle $bundle ) : JsonResponse
    {
        checkResourceRelation( $product -> bundles() -> where( 'bundles.id', $bundle -> id ) -> count());
        $bundle -> delete();
        return $this -> successResponse( null, 'Success', 'Bundle deleted', Response::HTTP_NO_CONTENT );
    }
}
