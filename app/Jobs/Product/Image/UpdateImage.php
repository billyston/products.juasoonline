<?php

namespace App\Jobs\Product\Image;

use App\Http\Requests\Product\Image\ImageRequest;
use App\Http\Resources\Product\Image\ImageResource;
use App\Models\Product\Image\Image;
use App\Traits\apiResponseBuilder;
use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class UpdateImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels, apiResponseBuilder;
    private ImageRequest $theRequest; private Image $theModel;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct( ImageRequest $imageRequest, Image $image )
    {
        $this -> theRequest     = $imageRequest;
        $this -> theModel       = $image;
    }

    /**
     * Execute the job.
     *
     * @return ImageResource|mixed
     */
    public function handle() : ImageResource
    {
        try
        {
            $this -> theModel -> update( $this -> theRequest -> validated()[ 'data' ][ 'attributes' ] );
            return new ImageResource( $this -> theModel );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
