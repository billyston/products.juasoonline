<?php

namespace App\Repositories\Specification;

use App\Http\Requests\Specification\SpecificationRequest;
use App\Http\Resources\Specification\SpecificationResource;
use App\Jobs\Specification\CreateSpecification;
use App\Jobs\Specification\UpdateSpecification;
use App\Models\Specification\Specification;
use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Exception;
use Illuminate\Http\Response;

class SpecificationRepository implements SpecificationRepositoryInterface
{
    use apiResponseBuilder; use Relatives;

    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse
    {
        $Specification = Specification::query() -> when( $this -> loadRelationships(), function ( Builder $builder ) { return $builder -> with ( $this -> relationships ); } ) -> paginate( 20 );
        return $this -> successResponse( SpecificationResource::collection( $Specification ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param SpecificationRequest $specificationRequest
     * @return JsonResponse
     */
    public function store( SpecificationRequest $specificationRequest ) : JsonResponse
    {
        return $this -> successResponse( ( new CreateSpecification( $specificationRequest ) ) -> handle(), "Success", "Specification(s) created", Response::HTTP_CREATED );
    }

    /**
     * @param Specification $specification
     * @return JsonResponse
     */
    public function show( Specification $specification ) : JsonResponse
    {
        if ( $this -> loadRelationships() ) { $specification -> load( $this -> relationships ); }
        return $this -> successResponse( new SpecificationResource( $specification ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param SpecificationRequest $specificationRequest
     * @param Specification $specification
     * @return JsonResponse
     */
    public function update( SpecificationRequest $specificationRequest, Specification $specification ) : JsonResponse
    {
        return $this -> successResponse( ( new UpdateSpecification( $specificationRequest, $specification ) ) -> handle(), 'Success', 'Specification updated', Response::HTTP_OK );
    }

    /**
     * @param Specification $specification
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy( Specification $specification ) : JsonResponse
    {
        $specification -> delete();
        return $this -> successResponse( null, 'Success', 'Specification deleted', Response::HTTP_NO_CONTENT );
    }
}
