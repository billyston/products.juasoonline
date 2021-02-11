<?php

namespace App\Jobs\Overview;

use App\Http\Requests\Overview\OverviewRequest;
use App\Http\Resources\Overview\OverviewResource;
use App\Models\Overview\Overview;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class UpdateOverview implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $theRequest; private $theModel;

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
            return abort(500, 'something went wrong, please try again later');
        }
    }
}
