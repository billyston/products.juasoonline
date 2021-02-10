<?php

namespace App\Http\Controllers\Specification;

use App\Http\Controllers\Controller;
use App\Http\Requests\Specification\SpecificationRequest;
use App\Models\Specification\Specification;
use App\Repositories\Specification\SpecificationRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SpecificationController extends Controller
{
    private $theRepository;

    /**
     * ProductController constructor.
     * @param SpecificationRepositoryInterface $specificationRepository
     */
    public function __construct( SpecificationRepositoryInterface $specificationRepository )
    {
        $this -> theRepository = $specificationRepository;
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
     * @param SpecificationRequest $specificationRequest
     * @return JsonResponse
     */
    public function store( SpecificationRequest $specificationRequest ) : JsonResponse
    {
        return $this -> theRepository -> store( $specificationRequest );
    }

    /**
     * Display the specified resource.
     *
     * @param Specification $specification
     * @return JsonResponse
     */
    public function show( Specification $specification ) : JsonResponse
    {
        return $this -> theRepository -> show( $specification );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SpecificationRequest $specificationRequest
     * @param Specification $specification
     * @return JsonResponse
     */
    public function update( SpecificationRequest $specificationRequest, Specification $specification ) : JsonResponse
    {
        return $this -> theRepository -> update( $specificationRequest, $specification );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Specification $specification
     * @return JsonResponse
     */
    public function destroy( Specification $specification ) : JsonResponse
    {
        return $this -> theRepository -> destroy( $specification );
    }
}
