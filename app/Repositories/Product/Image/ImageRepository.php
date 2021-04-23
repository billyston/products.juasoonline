<?php

namespace App\Repositories\Product\Image;

use App\Http\Requests\Product\Image\ImageRequest;
use App\Http\Resources\Product\Image\ImageResource;
use App\Jobs\Product\Image\CreateImage;
use App\Jobs\Product\Image\UpdateImage;
use App\Models\Product\Image\Image;
use App\Models\Product\Product;
use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ImageRepository implements ImageRepositoryInterface
{
    use apiResponseBuilder, Relatives;

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
    public function store( Product $product, ImageRequest $imageRequest ) : JsonResponse
    {
        return $this -> successResponse( ( new CreateImage( $product, $imageRequest ) ) -> handle(), "Success", "Image(s) created", Response::HTTP_CREATED );
    }

    /**
     * @param Product $product
     * @param Image $image
     * @return JsonResponse
     */
    public function show( Product $product, Image $image ) : JsonResponse
    {
        checkResourceRelation( $product -> images() -> where( 'images.id', $image -> id ) -> count());
        if ( $this -> loadRelationships() ) { $image -> load( $this -> relationships ); }
        return $this -> successResponse( new ImageResource( $image ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param Product $product
     * @param ImageRequest $imageRequest
     * @param Image $image
     * @return JsonResponse
     */
    public function update( Product $product, ImageRequest $imageRequest, Image $image ) : JsonResponse
    {
        checkResourceRelation( $product -> images() -> where( 'images.id', $image -> id ) -> count());
        return $this -> successResponse( ( new UpdateImage( $imageRequest, $image ) ) -> handle(), 'Success', 'Image updated', Response::HTTP_OK );
    }

    /**
     * @param Product $product
     * @param Image $image
     * @return JsonResponse
     */
    public function destroy( Product $product, Image $image ) : JsonResponse
    {
        checkResourceRelation( $product -> images() -> where( 'images.id', $image -> id ) -> count());
        $image -> delete();
        return $this -> successResponse( null, 'Success', 'Image deleted.', Response::HTTP_NO_CONTENT );
    }
}
