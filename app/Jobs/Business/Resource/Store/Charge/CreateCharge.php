<?php

namespace App\Jobs\Business\Resource\Store\Charge;

use App\Http\Requests\Business\Resource\Store\Charge\ChargeRequest;
use App\Http\Resources\Business\Resource\Store\Charge\ChargeResource;
use App\Models\Business\Store\Charge\Charge;

use App\Models\Business\Store\Store\Store;
use App\Traits\apiResponseBuilder;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Symfony\Component\HttpFoundation\Response;
use Exception;

class CreateCharge implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels, apiResponseBuilder;
    private ChargeRequest $theRequest; private Store $theModel;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct( Store $store, ChargeRequest $chargeRequest )
    {
        $this -> theModel = $store;
        $this -> theRequest = $chargeRequest;
    }

    /**
     * Execute the job.
     *
     * @return ChargeResource|mixed
     */
    public function handle() : ChargeResource
    {
        $Charge = Charge::where( 'name', "=", $this -> theRequest -> input( 'data.attributes' )) -> where( 'store_id', "=", $this -> theModel -> id ) -> first();

        if ( $Charge === null )
        {
            try
            {
                $Charge = new Charge( $this -> theRequest -> input( 'data.attributes' ) );
                $Charge -> store() -> associate( $this -> theModel -> id );
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
        else
        {
            return ( new ChargeResource( $Charge ) );
        }
    }
}
