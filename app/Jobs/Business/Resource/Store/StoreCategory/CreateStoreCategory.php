<?php

namespace App\Jobs\Business\Resource\Store\StoreCategory;

use App\Http\Requests\Business\Resource\Store\StoreCategory\StoreCategoryRequest;
use App\Http\Resources\Business\Resource\Store\StoreCategory\StoreCategoryResource;
use App\Models\Business\Store\StoreCategory\StoreCategory;

use App\Models\Business\Store\Store\Store;
use App\Traits\apiResponseBuilder;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class CreateStoreCategory implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels, apiResponseBuilder;
    private Store $theModel; private StoreCategoryRequest $theRequest;

    /**
     * CreateStoreCategory constructor.
     * @param Store $store
     * @param StoreCategoryRequest $productCategoryRequest
     */
    public function __construct(Store $store, StoreCategoryRequest $productCategoryRequest )
    {
        $this -> theModel = $store;
        $this -> theRequest = $productCategoryRequest;
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
            $Category = new StoreCategory( $this -> theRequest -> input( 'data.attributes' ) );
            $Category -> store() -> associate( $this -> theModel -> id );
            $Category -> save();

            $Category -> refresh();
            return ( new StoreCategoryResource( $Category ) );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
