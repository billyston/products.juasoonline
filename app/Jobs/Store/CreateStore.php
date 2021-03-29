<?php

namespace App\Jobs\Store;

use App\Http\Requests\Store\StoreRequest;
use App\Http\Resources\Store\StoreResource;
use App\Models\Store\Store;
use App\Traits\apiResponseBuilder;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class CreateStore implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    use apiResponseBuilder; private $theRequest;

    /**
     * CreateStore constructor.
     * @param StoreRequest $storeRequest
     */
    public function __construct( StoreRequest $storeRequest )
    {
        $this -> theRequest = $storeRequest;
    }

    /**
     * @return StoreResource|void
     */
    public function handle(): StoreResource
    {
        logger( $this->theRequest );
        try
        {
            $Store = new Store( $this -> theRequest -> input( 'data.attributes' ) );
            $Store -> save();

            $Store -> refresh();
            return ( new StoreResource( $Store ) );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort(500, 'something went wrong, please try again later');
        }
    }
}
