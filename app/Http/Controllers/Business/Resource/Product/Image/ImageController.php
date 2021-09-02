<?php

namespace App\Http\Controllers\Business\Resource\Product\Image;

use App\Repositories\Business\Resource\Product\Image\ImageRepositoryInterface;
use App\Http\Requests\Business\Resource\Product\Image\ImageRequest;
use App\Models\Business\Product\Image\Image;
use App\Models\Business\Product\Product\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class ImageController extends Controller
{
    private ImageRepositoryInterface $theRepository;

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
    public function store( Product $product, ImageRequest $imageRequest ) : JsonResponse
    {
        return $this -> theRepository -> store( $product, $imageRequest );
    }

    /**
     * Display the specified resource.
     * @param Product $product
     * @param Image $image
     * @return JsonResponse
     */
    public function show( Product $product, Image $image ) : JsonResponse
    {
        return $this -> theRepository -> show( $product, $image );
    }

    /**
     * Update the specified resource in storage.
     * @param Product $product
     * @param ImageRequest $imageRequest
     * @param Image $image
     * @return JsonResponse
     */
    public function update( Product $product, ImageRequest $imageRequest, Image $image ) : JsonResponse
    {
        return $this -> theRepository -> update( $product, $imageRequest, $image );
    }

    /**
     * Remove the specified resource from storage.
     * @param Product $product
     * @param Image $image
     * @return JsonResponse
     */
    public function destroy( Product $product, Image $image ) : JsonResponse
    {
        return $this -> theRepository -> destroy( $product, $image );
    }
}
