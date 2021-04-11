<?php

namespace App\Jobs\Store\StoreAdministrator;

use App\Http\Requests\Store\StoreAdministrator\StoreAdministratorRequest;
use App\Http\Resources\Store\StoreAdministrator\StoreAdministratorResource;
use App\Models\Store\StoreAdministrator\StoreAdministrator;
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
    private $theRequest; private $theModel;

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
