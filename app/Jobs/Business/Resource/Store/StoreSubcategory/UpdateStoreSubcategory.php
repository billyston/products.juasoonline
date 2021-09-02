<?php

namespace App\Jobs\Business\Resource\Store\StoreSubcategory;

use App\Http\Requests\Business\Resource\Store\StoreSubcategory\StoreSubcategoryRequest;
use App\Http\Resources\Business\Resource\Store\StoreSubcategory\StoreSubcategoryResource;
use App\Models\Business\Store\StoreSubcategory\StoreSubcategory;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class UpdateStoreSubcategory implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private StoreSubcategoryRequest $theRequest; private StoreSubcategory $theModel;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(StoreSubcategoryRequest $productSubcategoryRequest, StoreSubcategory $productSubcategory )
    {
        $this -> theRequest = $productSubcategoryRequest;
        $this -> theModel = $productSubcategory;
    }

    /**
     * Execute the job.
     *
     * @return StoreSubcategoryResource|mixed
     */
    public function handle() : StoreSubcategoryResource
    {
        try
        {
            $this -> theModel -> update( $this -> theRequest -> validated()[ 'data' ][ 'attributes' ] );
            return new StoreSubcategoryResource( $this -> theModel );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
