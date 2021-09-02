<?php

namespace App\Jobs\Business\Resource\Product\Size;

use App\Http\Requests\Business\Resource\Product\Size\SizeRequest;
use App\Http\Resources\Business\Resource\Product\Size\SizeResource;
use App\Models\Business\Product\Size\Size;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Response;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class UpdateSize implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private SizeRequest $theRequest; private Size $theModel;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct( SizeRequest $sizeRequest, Size $size )
    {
        $this -> theRequest     = $sizeRequest;
        $this -> theModel       = $size;
    }

    /**
     * Execute the job.
     *
     * @return SizeResource|mixed
     */
    public function handle() : SizeResource
    {
        try
        {
            $this -> theModel -> update( $this -> theRequest -> validated()[ 'data' ][ 'attributes' ] );
            return new SizeResource( $this -> theModel );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
