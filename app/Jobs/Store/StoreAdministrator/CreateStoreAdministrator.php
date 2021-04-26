<?php

namespace App\Jobs\Store\StoreAdministrator;

use App\Http\Requests\Store\StoreAdministrator\StoreAdministratorRequest;
use App\Http\Resources\Store\StoreAdministrator\StoreAdministratorResource;
use App\Models\Store\StoreAdministrator\StoreAdministrator;
use App\Traits\apiResponseBuilder;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class CreateStoreAdministrator implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels, apiResponseBuilder;
    private StoreAdministratorRequest $theRequest;

    /**
     * Create a new job instance.
     *
     * @param StoreAdministratorRequest $storeAdministratorRequest
     */
    public function __construct( StoreAdministratorRequest $storeAdministratorRequest )
    {
        $this -> theRequest = $storeAdministratorRequest;
    }

    /**
     * Execute the job.
     *
     * @return JsonResource|void
     */
    public function handle()
    {
        try
        {
            $storeAdministrator = new StoreAdministrator( $this -> theRequest -> input( 'data.attributes' ) );
            $storeAdministrator -> store() -> associate( $this -> theRequest [ 'data.relationships.store.store_id' ] );
            $storeAdministrator -> save();

            $storeAdministrator -> refresh();
            return ( new StoreAdministratorResource( $storeAdministrator ) );
        }

        catch ( Exception $exception )
        {
            report( $exception );
            return abort(500, 'something went wrong, please try again later');
        }
    }
}
