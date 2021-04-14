<?php

namespace App\Repositories\Product\Overview;

use App\Http\Requests\Product\Overview\OverviewRequest;
use App\Http\Resources\Product\Overview\OverviewResource;
use App\Jobs\Product\Overview\CreateOverview;
use App\Jobs\Product\Overview\UpdateOverview;
use App\Models\Product\Overview\Overview;
use App\Models\Product\Product;
use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Exception;

class OverviewRepository implements OverviewRepositoryInterface
{
    use apiResponseBuilder; use Relatives;

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
    public function store( OverviewRequest $overviewRequest, Product $product ) : JsonResponse
    {
        return $this -> successResponse( ( new CreateOverview( $overviewRequest, $product ) ) -> handle(), "Success", "Overview created", Response::HTTP_CREATED );
    }

    /**
     * @param Overview $overview
     * @return JsonResponse
     */
    public function show( Overview $overview ) : JsonResponse
    {
        if ( $this -> loadRelationships() ) { $overview -> load( $this -> relationships ); }
        return $this -> successResponse( new OverviewResource( $overview ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param OverviewRequest $overviewRequest
     * @param Overview $overview
     * @return JsonResponse
     */
    public function update( OverviewRequest $overviewRequest, Overview $overview ) : JsonResponse
    {
        if ( $this -> loadRelationships() ) { $overview -> load( $this -> relationships ); }
        return $this -> successResponse( ( new UpdateOverview( $overviewRequest, $overview ) ) -> handle(), 'Success', 'Overview updated', Response::HTTP_OK );
    }

    /**
     * @param Overview $overview
     * @return JsonResponse|void
     */
    public function destroy( Overview $overview ) : JsonResponse
    {
        try
        {
            $overview -> delete();
            return $this -> successResponse( null, 'Success', 'Overview deleted.', Response::HTTP_NO_CONTENT );
        }

        catch ( Exception $exception )
        {
            report( $exception );
            return abort(500, 'something went wrong, please try again later');
        }
    }
}
