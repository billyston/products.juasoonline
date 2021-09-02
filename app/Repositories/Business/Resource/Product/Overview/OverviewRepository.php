<?php

namespace App\Repositories\Business\Resource\Product\Overview;

use App\Http\Requests\Business\Resource\Product\Overview\OverviewRequest;
use App\Http\Resources\Business\Resource\Product\Overview\OverviewResource;
use App\Jobs\Business\Resource\Product\Overview\CreateOverview;
use App\Jobs\Business\Resource\Product\Overview\UpdateOverview;
use App\Models\Business\Product\Overview\Overview;
use App\Models\Business\Product\Product\Product;

use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Exception;

class OverviewRepository implements OverviewRepositoryInterface
{
    use apiResponseBuilder, Relatives;

    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function index( Product $product ) : JsonResponse
    {
        return $this -> successResponse( OverviewResource::collection( $product -> overviews() -> paginate() ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param OverviewRequest $overviewRequest
     * @param Product $product
     * @return JsonResponse
     */
    public function store( Product $product, OverviewRequest $overviewRequest ) : JsonResponse
    {
        return $this -> successResponse( ( new CreateOverview( $overviewRequest, $product ) ) -> handle(), "Success", "Overview created", Response::HTTP_CREATED );
    }

    /**
     * @param Product $product
     * @param Overview $overview
     * @return JsonResponse
     */
    public function show( Product $product, Overview $overview ) : JsonResponse
    {
        checkResourceRelation( $product -> overviews() -> where( 'overviews.id', $overview -> id ) -> count());
        if ( $this -> loadRelationships() ) { $overview -> load( $this -> relationships ); }
        return $this -> successResponse( new OverviewResource( $overview ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param Product $product
     * @param OverviewRequest $overviewRequest
     * @param Overview $overview
     * @return JsonResponse
     */
    public function update( Product $product, OverviewRequest $overviewRequest, Overview $overview ) : JsonResponse
    {
        checkResourceRelation( $product -> overviews() -> where( 'overviews.id', $overview -> id ) -> count());
        if ( $this -> loadRelationships() ) { $overview -> load( $this -> relationships ); }
        return $this -> successResponse( ( new UpdateOverview( $overviewRequest, $overview ) ) -> handle(), 'Success', 'Overview updated', Response::HTTP_OK );
    }

    /**
     * @param Product $product
     * @param Overview $overview
     * @return JsonResponse|void
     */
    public function destroy( Product $product, Overview $overview ) : JsonResponse
    {
        checkResourceRelation( $product -> overviews() -> where( 'overviews.id', $overview -> id ) -> count());
        $overview -> delete();
        return $this -> successResponse( null, 'Success', 'Overview deleted.', Response::HTTP_NO_CONTENT );
    }
}
