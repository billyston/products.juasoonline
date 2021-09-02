<?php

namespace App\Jobs\Business\Resource\Product\Bundle;

use App\Http\Requests\Business\Resource\Product\Bundle\BundleRequest;
use App\Http\Resources\Business\Resource\Product\Bundle\BundleResource;
use App\Models\Business\Product\Bundle\Bundle;

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
