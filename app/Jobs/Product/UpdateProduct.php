<?php

namespace App\Jobs\Product;

use App\Http\Requests\Product\ProductRequest;
use App\Http\Resources\Product\ProductResource;
use App\Models\Product\Product;
use App\Traits\apiResponseBuilder;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Response;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class UpdateProduct implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels, apiResponseBuilder;
    private ProductRequest $theRequest; private Product $theModel;

    /**
     * UpdateProduct constructor.
     * @param ProductRequest $productRequest
     * @param Product $product
     */
    public function __construct( ProductRequest $productRequest, Product $product )
    {
        $this -> theRequest     = $productRequest;
        $this -> theModel       = $product;
    }

    /**
     * @return ProductResource|mixed
     */
    public function handle() : ProductResource
    {
        try
        {
            $this -> theModel -> update( $this -> theRequest -> validated()[ 'data' ][ 'attributes' ] );
            return new ProductResource( $this -> theModel );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
