<?php

namespace App\Http\Controllers\Product\Image;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\Image\ImageRequest;
use App\Models\Product\Image\Image;
use App\Models\Product\Product;
use App\Repositories\Product\Image\ImageRepositoryInterface;
use Illuminate\Http\JsonResponse;

class ImageController extends Controller
{
    private $theRepository;

    /**
     * ImageController constructor.
     * @param ImageRepositoryInterface $imageRepository
     */
    public function __construct( ImageRepositoryInterface $imageRepository )
    {
        $this -> theRepository = $imageRepository;
    }

    /**
     * Display a listing of the resource.
     * @param Product $product
     * @return JsonResponse
     */
    public function index( Product $product ) : JsonResponse
    {
        return $this -> theRepository -> index( $product );
    }

    /**
     * Store a newly created resource in storage.
     * @param ImageRequest $imageRequest
     * @param Product $product
     * @return JsonResponse
     */
    public function store( ImageRequest $imageRequest, Product $product ) : JsonResponse
    {
        return $this -> theRepository -> store( $imageRequest, $product );
    }

    /**
     * Display the specified resource.
     * @param Product $product
     * @param Image $image
     * @return JsonResponse
     */
    public function show( Product $product, Image $image ) : JsonResponse
    {
        abort_unless($product -> id === $image -> product_id, 401,'Image does not belong to product' );
        return $this -> theRepository -> show( $image );
    }

    /**
     * Update the specified resource in storage.
     * @param ImageRequest $imageRequest
     * @param Image $image
     * @return JsonResponse
     */
    public function update( ImageRequest $imageRequest, Image $image ) : JsonResponse
    {
        return $this -> theRepository -> update( $imageRequest, $image );
    }

    /**
     * Remove the specified resource from storage.
     * @param Image $image
     * @return JsonResponse
     */
    public function destroy( Image $image ) : JsonResponse
    {
        return $this -> theRepository -> delete( $image );
    }
}
