<?php

namespace App\Jobs\Business\Resource\Store\StoreCategory;

use App\Http\Requests\Business\Resource\Store\StoreCategory\StoreCategoryRequest;
use App\Http\Resources\Business\Resource\Store\StoreCategory\StoreCategoryResource;
use App\Models\Business\Store\StoreCategory\StoreCategory;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class UpdateStoreCategory implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private StoreCategoryRequest $theRequest; private StoreCategory $theModel;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct( StoreCategoryRequest $productCategoryRequest, StoreCategory $productCategory )
    {
        $this -> theRequest     = $productCategoryRequest;
        $this -> theModel       = $productCategory;
    }

    /**
     * Execute the job.
     *
     * @return StoreCategoryResource|mixed
     */
    public function handle() : StoreCategoryResource
    {
        try
        {
            $this -> theModel -> update( $this -> theRequest -> validated()[ 'data' ][ 'attributes' ] );
            return new StoreCategoryResource( $this -> theModel );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
