<?php

namespace App\Jobs\Business\Resource\Product\Color;

use App\Http\Requests\Business\Resource\Product\Color\ColorRequest;
use App\Http\Resources\Business\Resource\Product\Color\ColorResource;
use App\Models\Business\Product\Color\Color;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Response;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class UpdateColor implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private ColorRequest $theRequest; private Color $theModel;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct( ColorRequest $colorRequest, Color $color )
    {
        $this -> theRequest     = $colorRequest;
        $this -> theModel       = $color;
    }

    /**
     * Execute the job.
     *
     * @return ColorResource|mixed
     */
    public function handle() : ColorResource
    {
        try
        {
            $this -> theModel -> update( $this -> theRequest -> validated()[ 'data' ][ 'attributes' ] );
            return new ColorResource( $this -> theModel );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
