<?php

namespace App\Jobs\Store\Branch;

use App\Http\Requests\Store\Branch\BranchRequest;
use App\Http\Resources\Store\Branch\BranchResource;
use App\Models\Store\Branch\Branch;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class UpdateBranch implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private BranchRequest $theRequest; private Branch $theModel;

    /**
     * UpdateBranch constructor.
     * @param BranchRequest $branchRequest
     * @param Branch $branch
     */
    public function __construct( BranchRequest $branchRequest, Branch $branch )
    {
        $this -> theRequest     = $branchRequest;
        $this -> theModel       = $branch;
    }

    /**
     * @return BranchResource|mixed
     */
    public function handle() : BranchResource
    {
        try
        {
            $this -> theModel -> update( $this -> theRequest -> validated()[ 'data' ][ 'attributes' ] );
            return new BranchResource( $this -> theModel );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
