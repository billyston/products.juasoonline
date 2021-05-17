<?php

namespace App\Jobs\Store\Charge;

use App\Http\Requests\Store\Charge\ChargeRequest;
use App\Http\Resources\Store\Charge\ChargeResource;
use App\Models\Store\Charge\Charge;
use App\Traits\apiResponseBuilder;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class CreateCharge implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels, apiResponseBuilder;
    private ChargeRequest $theRequest;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct( ChargeRequest $chargeRequest )
    {
        $this -> theRequest = $chargeRequest;
    }

    /**
     * Execute the job.
     *
     * @return ChargeResource|mixed
     */
    public function handle() : ChargeResource
    {
        try
        {
            $Charge = new Charge( $this -> theRequest -> input( 'data.attributes' ) );
            $Charge -> store() -> associate( $this -> theRequest [ 'data.relationships.store.store_id' ] );
            $Charge -> save();

            $Charge -> refresh();
            return ( new ChargeResource( $Charge ) );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
