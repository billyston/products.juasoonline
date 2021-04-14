<?php

namespace App\Repositories\Product\Specification;

use App\Http\Requests\Product\Specification\SpecificationRequest;
use App\Http\Resources\Product\Specification\SpecificationResource;
use App\Jobs\Product\Specification\CreateSpecification;
use App\Jobs\Product\Specification\UpdateSpecification;
use App\Models\Product\Product;
use App\Models\Product\Specification\Specification;
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
     * @param Product $product
     * @return JsonResponse
     */
    public function index( Product $product ) : JsonResponse
    {
        return $this -> successResponse( SpecificationResource::collection( $product -> specifications() -> paginate() ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param SpecificationRequest $specificationRequest
     * @param Product $product
     * @return JsonResponse
     */
    public function store( Product $product, SpecificationRequest $specificationRequest  ) : JsonResponse
    {
        return $this -> successResponse( ( new CreateSpecification( $product, $specificationRequest  ) ) -> handle(), "Success", "Specification(s) created", Response::HTTP_CREATED );
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
