<?php

namespace App\Jobs\Product\Specification;

use App\Http\Requests\Product\Specification\SpecificationRequest;
use App\Http\Resources\Product\Specification\SpecificationResource;
use App\Models\Product\Specification\Specification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class UpdateSpecification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private SpecificationRequest $theRequest; private Specification $theModel;

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
     * @return SpecificationResource|mixed
     */
    public function handle() : SpecificationResource
    {
        try
        {
            $this -> theModel -> update( $this -> theRequest -> validated()[ 'data' ][ 'attributes' ] );
            return new SpecificationResource( $this -> theModel );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
