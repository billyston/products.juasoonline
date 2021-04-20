<?php

namespace App\Jobs\Product\Size;

use App\Http\Requests\Product\Size\SizeRequest;
use App\Http\Resources\Product\Size\SizeResource;
use App\Models\Product\Size\Size;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

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
     * @return AnonymousResourceCollection
     */
    public function handle() : AnonymousResourceCollection
    {
        try
        {
            $this -> theModel -> update( $this -> theRequest -> validated()[ 'data' ][ 'attributes' ] );
            return new SizeResource( $this -> theModel );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort(500, 'something went wrong, please try again later');
        }
    }
}
