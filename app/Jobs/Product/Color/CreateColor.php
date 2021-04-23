<?php

namespace App\Jobs\Product\Color;

use App\Http\Requests\Product\Color\ColorRequest;
use App\Http\Resources\Product\Color\ColorResource;
use App\Models\Product\Color\Color;
use App\Models\Product\Product;
use App\Traits\apiResponseBuilder;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class CreateColor implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels, apiResponseBuilder;
    private Product $theModel; private ColorRequest $theRequest;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct( Product $product, ColorRequest $theRequest  )
    {
        $this -> theRequest = $theRequest;
        $this -> theModel = $product;
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
            foreach ( $this -> theRequest [ 'data.colors.data' ] as $color )
            {
                $Color = new Color( $color );
                $Color -> product() -> associate( $this -> theRequest [ 'data.relationships.product.product_id' ] );
                $Color -> save();
            }
            return ColorResource::collection( $this -> theModel -> colors() -> paginate() );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
