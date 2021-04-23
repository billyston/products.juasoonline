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
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class SpecificationRepository implements SpecificationRepositoryInterface
{
    use apiResponseBuilder, Relatives;

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
     * @param Product $product
     * @param Specification $specification
     * @return JsonResponse
     */
    public function show( Product $product, Specification $specification ) : JsonResponse
    {
        checkResourceRelation( $product -> specifications() -> where( 'specifications.id', $specification -> id ) -> count());
        if ( $this -> loadRelationships() ) { $specification -> load( $this -> relationships ); }
        return $this -> successResponse( new SpecificationResource( $specification ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param Product $product
     * @param SpecificationRequest $specificationRequest
     * @param Specification $specification
     * @return JsonResponse
     */
    public function update( Product $product, SpecificationRequest $specificationRequest, Specification $specification ) : JsonResponse
    {
        checkResourceRelation( $product -> specifications() -> where( 'specifications.id', $specification -> id ) -> count());
        return $this -> successResponse( ( new UpdateSpecification( $specificationRequest, $specification ) ) -> handle(), 'Success', 'Specification updated', Response::HTTP_OK );
    }

    /**
     * @param Product $product
     * @param Specification $specification
     * @return JsonResponse
     */
    public function destroy( Product $product, Specification $specification ) : JsonResponse
    {
        checkResourceRelation( $product -> specifications() -> where( 'specifications.id', $specification -> id ) -> count());
        $specification -> delete();
        return $this -> successResponse( null, 'Success', 'Specification deleted', Response::HTTP_NO_CONTENT );
    }
}
