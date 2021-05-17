<?php

namespace App\Jobs\Store\Charge;

use App\Http\Requests\Store\Charge\ChargeRequest;
use App\Http\Resources\Store\Charge\ChargeResource;
use App\Models\Store\Charge\Charge;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class UpdateCharge implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private ChargeRequest $theRequest; private Charge $theModel;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct( ChargeRequest $chargeRequest, Charge $charge )
    {
        $this -> theRequest     = $chargeRequest;
        $this -> theModel       = $charge;
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
            $this -> theModel -> update( $this -> theRequest -> validated()[ 'data' ][ 'attributes' ] );
            return new ChargeResource( $this -> theModel );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
