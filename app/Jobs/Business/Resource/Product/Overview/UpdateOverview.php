<?php

namespace App\Jobs\Business\Resource\Product\Overview;

use App\Http\Requests\Business\Resource\Product\Overview\OverviewRequest;
use App\Http\Resources\Business\Resource\Product\Overview\OverviewResource;
use App\Models\Business\Product\Overview\Overview;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Symfony\Component\HttpFoundation\Response;
use Exception;

class UpdateOverview implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private OverviewRequest $theRequest; private Overview $theModel;

    /**
     * Create a new job instance.
     *
     * @param OverviewRequest $overviewRequest
     * @param Overview $overview
     */
    public function __construct( OverviewRequest $overviewRequest, Overview $overview )
    {
        $this -> theRequest     = $overviewRequest;
        $this -> theModel       = $overview;
    }

    /**
     * Execute the job.
     *
     * @return OverviewResource|void
     */
    public function handle() : OverviewResource
    {
        try
        {
            $this -> theModel -> update( $this -> theRequest -> validated()[ 'data' ][ 'attributes' ] );
            return new OverviewResource( $this -> theModel );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
