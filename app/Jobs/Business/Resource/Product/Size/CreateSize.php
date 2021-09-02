<?php

namespace App\Jobs\Business\Resource\Product\Size;

use App\Http\Requests\Business\Resource\Product\Size\SizeRequest;
use App\Http\Resources\Business\Resource\Product\Size\SizeResource;
use App\Models\Business\Product\Product\Product;
use App\Models\Business\Product\Size\Size;

use App\Traits\apiResponseBuilder;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class CreateSize implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels, apiResponseBuilder;
    private Product $theProduct; private SizeRequest $theRequest;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct( Product $product, SizeRequest $sizeRequest )
    {
        $this -> theProduct = $product;
        $this -> theRequest = $sizeRequest;
    }

    /**
     * Execute the job.
     *
     * @return AnonymousResourceCollection|mixed
     */
    public function handle() : AnonymousResourceCollection
    {
        try
        {
            foreach ( $this -> theRequest [ 'data.sizes.data' ] as $size )
            {
                $size = new Size( $size );
                $size -> product() -> associate( $this -> theRequest [ 'data.relationships.product.product_id' ] );
                $size -> save();
            }
            return SizeResource::collection( $this -> theProduct -> sizes() -> paginate() );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
