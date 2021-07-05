<?php

namespace App\Jobs\Product\Bundle;

use App\Http\Requests\Product\Bundle\BundleRequest;
use App\Http\Resources\Product\Bundle\BundleResource;
use App\Models\Product\Bundle\Bundle;
use App\Models\Product\Product;
use App\Traits\apiResponseBuilder;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class CreateBundle implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels, apiResponseBuilder;
    private Product $theModel; private BundleRequest $theRequest;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct( Product $product, BundleRequest $bundleRequest )
    {
        $this -> theModel = $product;
        $this -> theRequest = $bundleRequest;
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
            foreach ( $this -> theRequest [ 'data.bundles.data' ] as $bundle )
            {
                $Bundle = new Bundle( $bundle );
                $Bundle -> product() -> associate( $this -> theRequest [ 'data.relationships.product.product_id' ] );
                $Bundle -> save();
            }
            return BundleResource::collection( $this -> theModel -> colors() -> paginate() );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
