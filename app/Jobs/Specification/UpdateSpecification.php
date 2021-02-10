<?php

namespace App\Jobs\Specification;

use App\Http\Requests\Specification\SpecificationRequest;
use App\Models\Specification\Specification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\JsonResponse;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class UpdateSpecification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $theRequest; private $theModel;

    /**
     * Create a new job instance.
     *
     * @param SpecificationRequest $specificationRequest
     * @param Specification $specification
     */
    public function __construct( SpecificationRequest $specificationRequest, Specification $specification )
    {
        $this -> theRequest     = $specificationRequest;
        $this -> theModel       = $specification;
    }

    /**
     * Execute the job.
     *
     * @return void|JsonResponse
     */
    public function handle()
    {
        try
        {
            $this -> theModel -> update( $this -> theRequest -> validated()[ 'data' ][ 'attributes' ] );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort(500, 'something went wrong, please try again later');
        }
    }
}
