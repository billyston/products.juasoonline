<?php

namespace App\Jobs\Others\Brand;

use App\Http\Requests\Others\Brand\BrandRequest;
use App\Http\Resources\Others\Brand\BrandResource;
use App\Models\Others\Brand\Brand;
use App\Traits\apiResponseBuilder;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Response;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class CreateBrand implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels, apiResponseBuilder;
    private BrandRequest $theRequest;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct( BrandRequest $brandRequest )
    {
        $this -> theRequest = $brandRequest;
    }

    /**
     * Execute the job.
     *
     * @return BrandResource|mixed
     */
    public function handle() : BrandResource
    {
        try
        {
            $Brand = new Brand( $this -> theRequest -> input( 'data.attributes' ) );
            $Brand -> save();

            $Brand -> refresh();
            return ( new BrandResource( $Brand ) );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
