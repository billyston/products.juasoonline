<?php

namespace App\Jobs\Product\Promotion;

use App\Http\Requests\Product\Promotion\PromotionRequest;
use App\Http\Resources\Product\Promotion\PromotionResource;
use App\Models\Product\Product;
use App\Models\Product\Promotion\Promotion;
use App\Traits\apiResponseBuilder;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class CreatePromotion implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels, apiResponseBuilder;
    private Product $theModel; private PromotionRequest $theRequest;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct( Product $product, PromotionRequest $promotionRequest )
    {
        $this -> theModel = $product;
        $this -> theRequest = $promotionRequest;
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
            $Promotion = new Promotion( $this -> theRequest -> input( 'data.attributes' ) );
            $Promotion -> promo_type() -> associate( $this -> theRequest [ 'data.relationships.promo_type.promo_type_id' ] );
            $Promotion -> product() -> associate( $this -> theRequest [ 'data.relationships.product.product_id' ] );
            $Promotion -> save();

            $Promotion -> refresh();
            return ( new PromotionResource( $Promotion ) );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
