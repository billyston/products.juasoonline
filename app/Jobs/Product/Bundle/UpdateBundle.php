<?php

namespace App\Jobs\Product\Bundle;

use App\Http\Requests\Product\Bundle\BundleRequest;
use App\Http\Resources\Product\Bundle\BundleResource;
use App\Models\Product\Bundle\Bundle;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class UpdateBundle implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private BundleRequest  $theRequest; private Bundle $theModel;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct( BundleRequest $bundleRequest, Bundle $bundle )
    {
        $this -> theRequest     = $bundleRequest;
        $this -> theModel       = $bundle;
    }

    /**
     * Execute the job.
     *
     * @return BundleResource|mixed
     */
    public function handle() : BundleResource
    {
        try
        {
            $this -> theModel -> update( $this -> theRequest -> validated()[ 'data' ][ 'attributes' ] );
            return new BundleResource( $this -> theModel );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
