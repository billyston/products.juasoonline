<?php

namespace App\Jobs\Store;

use App\Http\Requests\Store\StoreRequest;
use App\Http\Resources\Store\StoreResource;
use App\Models\Store\Store;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class UpdateStore implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private StoreRequest $theRequest; private Store $theModel;

    /**
     * UpdateStore constructor.
     * @param StoreRequest $storeRequest
     * @param Store $store
     */
    public function __construct( StoreRequest $storeRequest, Store $store )
    {
        $this -> theRequest     = $storeRequest;
        $this -> theModel       = $store;
    }

    /**
     * @return StoreResource|void
     */
    public function handle(): StoreResource
    {
        try
        {
            $this -> theModel -> update( $this -> theRequest -> validated()[ 'data' ][ 'attributes' ] );
            return new StoreResource( $this -> theModel );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort(500, 'something went wrong, please try again later');
        }
    }
}
