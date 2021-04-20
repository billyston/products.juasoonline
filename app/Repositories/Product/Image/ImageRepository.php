<?php

namespace App\Repositories\Product\Image;

use App\Http\Requests\Product\Image\ImageRequest;
use App\Http\Resources\Product\Image\ImageResource;
use App\Jobs\Product\Image\CreateImage;
use App\Models\Product\Image\Image;
use App\Models\Product\Product;
use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ImageRepository implements ImageRepositoryInterface
{
    use apiResponseBuilder; use Relatives;

    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function index( Product $product ) : JsonResponse
    {
        return $this -> successResponse( ImageResource::collection( $product -> images() -> paginate() ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param ImageRequest $imageRequest
     * @param Product $product
     * @return JsonResponse
     */
    public function store( ImageRequest $imageRequest, Product $product ) : JsonResponse
    {
        return $this -> successResponse( ( new CreateImage( $imageRequest, $product ) ) -> handle(), "Success", "Image(s) created", Response::HTTP_CREATED );
    }

    /**
     * @param Image $image
     * @return JsonResponse
     */
    public function show( Image $image, Product $product ) : JsonResponse
    {}

    /**
     * @param ImageRequest $imageRequest
     * @param Image $image
     * @return JsonResponse
     */
    public function update( ImageRequest $imageRequest, Image $image ) : JsonResponse
    {}

    /**
     * @param Image $image
     * @return JsonResponse
     */
    public function destroy( Image $image ) : JsonResponse
    {}
}
