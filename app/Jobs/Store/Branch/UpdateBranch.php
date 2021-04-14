<?php

namespace App\Jobs\Store\Branch;

use App\Http\Requests\Branch\BranchRequest;
use App\Http\Resources\Branch\BranchResource;
use App\Models\Branch\Branch;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class UpdateBranch implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $theRequest; private $theModel;

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
     * @return BranchResource|void
     */
    public function handle()
    {
        try
        {
            $this -> theModel -> update( $this -> theRequest -> validated()[ 'data' ][ 'attributes' ] );
            return new BranchResource( $this -> theModel );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort(500, 'something went wrong, please try again later');
        }
    }
}
