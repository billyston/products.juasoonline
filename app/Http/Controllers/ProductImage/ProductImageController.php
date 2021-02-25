<?php

namespace App\Http\Controllers\ProductImage;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductImage\ProductImageRequest;
use App\Models\ProductImage\ProductImage;
use App\Repositories\ProductImage\ProductImageRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductImageController extends Controller
{
    private $theRepository;

    /**
     * ProductController constructor.
     * @param ProductImageRepositoryInterface $productImageRepository
     */
    public function __construct( ProductImageRepositoryInterface $productImageRepository )
    {
        $this -> theRepository = $productImageRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() : JsonResponse
    {
        return $this -> theRepository -> index();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProductImageRequest $productImageRequest
     * @return JsonResponse
     */
    public function store( ProductImageRequest $productImageRequest ) : JsonResponse
    {
        return $this -> theRepository -> store( $productImageRequest );
    }

    /**
     * Display the specified resource.
     *
     * @param ProductImage $productImage
     * @return JsonResponse
     */
    public function show( ProductImage $productImage ) : JsonResponse
    {
        return $this -> theRepository -> show( $productImage );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProductImageRequest $productImageRequest
     * @param ProductImage $productImage
     * @return JsonResponse
     */
    public function update( ProductImageRequest $productImageRequest, ProductImage $productImage ) : JsonResponse
    {
        return $this -> theRepository -> update( $productImageRequest, $productImage );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ProductImage $productImage
     * @return JsonResponse
     */
    public function destroy( ProductImage $productImage ) : JsonResponse
    {
        return $this -> theRepository -> delete( $productImage );
    }
}
