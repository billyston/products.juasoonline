<?php

namespace App\Jobs\Business\Resource\Store\Branch;

use App\Http\Requests\Business\Resource\Store\Branch\BranchRequest;
use App\Http\Resources\Business\Resource\Store\Branch\BranchResource;
use App\Models\Business\Store\Branch\Branch;

use App\Traits\apiResponseBuilder;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Response;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class CreateBranch implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels, apiResponseBuilder;
    private BranchRequest $theRequest;

    /**
     * CreateBranch constructor.
     * @param BranchRequest $branchRequest
     */
    public function __construct( BranchRequest  $branchRequest )
    {
        $this -> theRequest = $branchRequest;
    }

    /**
     * @return BranchResource|mixed
     */
    public function handle(): BranchResource
    {
        try
        {
            $Branch = new Branch( $this -> theRequest -> input( 'data.attributes' ) );
            $Branch -> store() -> associate( $this -> theRequest [ 'data.relationships.store.store_id' ] );
            $Branch -> save();

            $Branch -> refresh();
            return ( new BranchResource( $Branch ) );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
