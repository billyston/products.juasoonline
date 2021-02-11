<?php

namespace App\Jobs\Overview;

use App\Http\Requests\Overview\OverviewRequest;
use App\Http\Resources\Overview\OverviewResource;
use App\Models\Overview\Overview;
use App\Traits\apiResponseBuilder;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class CreateOverview implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    use apiResponseBuilder; private $theRequest;

    /**
     * Create a new job instance.
     *
     * @param OverviewRequest $overviewRequest
     */
    public function __construct( OverviewRequest $overviewRequest )
    {
        return $this -> theRequest = $overviewRequest;
    }

    /**
     * Execute the job.
     *
     * @return OverviewResource|void
     */
    public function handle(): OverviewResource
    {
        try
        {
            $Overview = new Overview( $this -> theRequest -> input( 'data.attributes' ) );
            $Overview -> product() -> associate( $this -> theRequest [ 'data.relationships.product.product_id' ] );
            $Overview -> save();

            $Overview -> refresh();
            return ( new OverviewResource( $Overview ) );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort(500, 'something went wrong, please try again later');
        }
    }
}
