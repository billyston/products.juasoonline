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
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class CreateColor implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels, apiResponseBuilder;

    private Product $theProduct;
    private ColorRequest $theRequest;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct( ColorRequest $theRequest, Product $product )
    {
        $this -> theRequest = $theRequest;
        $this -> theProduct = $product;
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
            foreach ( $this -> theRequest [ 'data.color.data' ] as $color )
            {
                $Color = new Color( $color );
                $Color -> product() -> associate( $this -> theRequest [ 'data.relationships.product.product_id' ] );
                $Color -> save();
            }
            return ColorResource::collection( $this -> theProduct -> colors() -> paginate() );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort(500, 'something went wrong, please try again later');
        }
    }
}
