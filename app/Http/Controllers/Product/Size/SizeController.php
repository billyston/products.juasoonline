<?php

namespace App\Http\Controllers\Product\Size;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\Size\SizeRequest;
use App\Models\Product\Product;
use App\Models\Product\Size\Size;
use App\Repositories\Product\Size\SizeRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

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
     * @param Size $size
     * @return JsonResponse
     */
    public function destroy( Product $product, Size $size ) : JsonResponse
    {
        return $this -> theRepository -> destroy( $product, $size );
    }
}
