<?php

namespace App\Jobs\Others\PromoType;

use App\Http\Requests\Others\PromoType\PromoTypeRequest;
use App\Http\Resources\Others\PromoType\PromoTypeResource;
use App\Models\Others\PromoType\PromoType;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class UpdatePromoType implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private PromoTypeRequest $theRequest; private PromoType $theModel;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct( PromoTypeRequest $promoTypeRequest, PromoType $promoType )
    {
        $this -> theRequest     = $promoTypeRequest;
        $this -> theModel       = $promoType;
    }

    /**
     * Execute the job.
     *
     * @return PromoTypeResource|mixed
     */
    public function handle() : PromoTypeResource
    {
        try
        {
            $this -> theModel -> update( $this -> theRequest -> validated()[ 'data' ][ 'attributes' ] );
            return new PromoTypeResource( $this -> theModel );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
