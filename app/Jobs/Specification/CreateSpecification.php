<?php

namespace App\Jobs\Specification;

use App\Http\Requests\Specification\SpecificationRequest;
use App\Models\Specification\Specification;
use App\Traits\apiResponseBuilder;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\JsonResponse;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class CreateSpecification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    use apiResponseBuilder; private $theRequest;

    /**
     * Create a new job instance.
     *
     * @param SpecificationRequest $specificationRequest
     */
    public function __construct( SpecificationRequest $specificationRequest )
    {
        return $this -> theRequest = $specificationRequest;
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
            foreach ( $this -> theRequest [ 'data.specifications.data' ] as $specification )
            {
                $Specification = new Specification( $specification );
                $Specification -> product() -> associate( $this -> theRequest [ 'data.relationships.product.product_id' ] );
                $Specification -> save();
            }
        }

        catch ( Exception $exception )
        {
            report( $exception );
            return abort(500, 'something went wrong, please try again later');
        }
    }
}
