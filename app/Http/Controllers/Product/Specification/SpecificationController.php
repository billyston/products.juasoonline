<?php

namespace App\Http\Controllers\Product\Specification;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\Specification\SpecificationRequest;
use App\Models\Product\Product;
use App\Models\Product\Specification\Specification;
use App\Repositories\Product\Specification\SpecificationRepositoryInterface;
use Illuminate\Http\JsonResponse;

class SpecificationController extends Controller
{
    private SpecificationRepositoryInterface $theRepository;

    /**
     * SpecificationController constructor.
     * @param SpecificationRepositoryInterface $specificationRepository
     */
    public function __construct( SpecificationRepositoryInterface $specificationRepository )
    {
        $this -> theRepository = $specificationRepository;
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
     * @param SpecificationRequest $specificationRequest
     * @param Product $product
     * @return JsonResponse
     */
    public function store( Product $product, SpecificationRequest $specificationRequest  ) : JsonResponse
    {
        return $this -> theRepository -> store( $product, $specificationRequest );
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @param Specification $specification
     * @return JsonResponse
     */
    public function show( Product $product, Specification $specification ) : JsonResponse
    {
        return $this -> theRepository -> show( $product, $specification );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Product $product
     * @param SpecificationRequest $specificationRequest
     * @param Specification $specification
     * @return JsonResponse
     */
    public function update( Product $product, SpecificationRequest $specificationRequest, Specification $specification ) : JsonResponse
    {
        return $this -> theRepository -> update( $product, $specificationRequest, $specification );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @param Specification $specification
     * @return JsonResponse
     */
    public function destroy( Product $product, Specification $specification ) : JsonResponse
    {
        return $this -> theRepository -> destroy( $product, $specification );
    }
}