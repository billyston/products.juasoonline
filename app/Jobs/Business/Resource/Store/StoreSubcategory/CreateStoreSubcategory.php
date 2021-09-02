<?php

namespace App\Jobs\Business\Resource\Store\StoreSubcategory;

use App\Http\Requests\Business\Resource\Store\StoreSubcategory\StoreSubcategoryRequest;
use App\Http\Resources\Business\Resource\Store\StoreSubcategory\StoreSubcategoryResource;
use App\Models\Business\Store\StoreCategory\StoreCategory;

use App\Models\Business\Store\StoreSubcategory\StoreSubcategory;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class CreateStoreSubcategory implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private StoreCategory $theStoreCategory; private StoreSubcategoryRequest $theRequest;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct( StoreCategory $storeCategory, StoreSubcategoryRequest $storeSubcategoryRequest )
    {
        $this -> theStoreCategory = $storeCategory;
        $this -> theRequest = $storeSubcategoryRequest;
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
            $Subcategory = new StoreSubcategory( $this -> theRequest -> input( 'data.attributes' ) );
            $Subcategory -> category() -> associate( $this -> theStoreCategory -> id );
            $Subcategory -> save();

            $Subcategory -> refresh();
            return ( new StoreSubcategoryResource( $Subcategory ) );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort(500, 'something went wrong, please try again later');
        }
    }
}
