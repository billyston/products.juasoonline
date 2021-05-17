<?php

namespace App\Jobs\Product\Promotion;

use App\Http\Requests\Product\Promotion\PromotionRequest;
use App\Http\Resources\Product\Promotion\PromotionResource;
use App\Models\Product\Promotion\Promotion;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class UpdatePromotion implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private PromotionRequest $theRequest; private Promotion $theModel;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct( PromotionRequest $promotionRequest, Promotion $promotion )
    {
        $this -> theRequest     = $promotionRequest;
        $this -> theModel       = $promotion;
    }

    /**
     * Execute the job.
     *
     * @return PromotionResource|mixed
     */
    public function handle() : PromotionResource
    {
        try
        {
            $this -> theModel -> update( $this -> theRequest -> validated()[ 'data' ][ 'attributes' ] );
            return new PromotionResource( $this -> theModel );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
