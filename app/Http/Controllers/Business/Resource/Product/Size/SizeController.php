<?php

namespace App\Http\Controllers\Business\Resource\Product\Size;

use App\Repositories\Business\Resource\Product\Size\SizeRepositoryInterface;
use App\Http\Requests\Business\Resource\Product\Size\SizeRequest;
use App\Models\Business\Product\Product\Product;
use App\Models\Business\Product\Size\Size;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class SizeController extends Controller
{
    private SizeRepositoryInterface $theRepository;

    /**
     * SizeController constructor.
     *
     * @param SizeRepositoryInterface $sizeRepository
     */
    public function __construct( SizeRepositoryInterface $sizeRepository )
    {
        $this -> theRepository = $sizeRepository;
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
     * @param SizeRequest $sizeRequest
     * @return JsonResponse
     */
    public function store( Product $product, SizeRequest $sizeRequest ) : JsonResponse
    {
        return $this -> theRepository -> store( $product, $sizeRequest );
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @param Size $size
     * @return JsonResponse
     */
    public function show( Product $product, Size $size ) : JsonResponse
    {
        return $this -> theRepository -> show( $product, $size );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Product $product
     * @param SizeRequest $sizeRequest
     * @param Size $size
     * @return JsonResponse
     */
    public function update( Product $product, SizeRequest $sizeRequest, Size $size ) : JsonResponse
    {
        return $this -> theRepository -> update( $product, $sizeRequest, $size );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @param Size $size
     * @return JsonResponse
     */
    public function destroy( Product $product, Size $size ) : JsonResponse
    {
        return $this -> theRepository -> destroy( $product, $size );
    }
}
