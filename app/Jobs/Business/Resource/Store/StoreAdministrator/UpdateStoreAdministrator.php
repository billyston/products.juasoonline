<?php

namespace App\Jobs\Business\Resource\Store\StoreAdministrator;

use App\Http\Requests\Business\Resource\Store\StoreAdministrator\StoreAdministratorRequest;
use App\Http\Resources\Business\Resource\Store\StoreAdministrator\StoreAdministratorResource;
use App\Models\Business\Store\StoreAdministrator\StoreAdministrator;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class UpdateStoreAdministrator implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private StoreAdministratorRequest $theRequest; private StoreAdministrator $theModel;

    /**
     * Create a new job instance.
     *
     * @param StoreAdministratorRequest $storeAdministratorRequest
     * @param StoreAdministrator $storeAdministrator
     */
    public function __construct( StoreAdministratorRequest $storeAdministratorRequest, StoreAdministrator $storeAdministrator )
    {
        $this -> theRequest     = $storeAdministratorRequest;
        $this -> theModel       = $storeAdministrator;
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
            $this -> theModel -> update( $this -> theRequest -> validated()[ 'data' ][ 'attributes' ] );
            return new StoreAdministratorResource( $this -> theModel );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort(500, 'something went wrong, please try again later');
        }
    }
}
