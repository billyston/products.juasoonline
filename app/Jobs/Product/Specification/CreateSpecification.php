<?php

namespace App\Jobs\Product\Specification;

use App\Http\Requests\Product\Specification\SpecificationRequest;
use App\Http\Resources\Product\Specification\SpecificationResource;
use App\Models\Product\Product;
use App\Models\Product\Specification\Specification;
use App\Traits\apiResponseBuilder;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class CreateSpecification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    use apiResponseBuilder;
    private Product $theProduct;
    private SpecificationRequest $theRequest;

    /**
     * Create a new job instance.
     * @param SpecificationRequest $specificationRequest
     * @param Product $product
     */
    public function __construct( Product $product, SpecificationRequest $specificationRequest )
    {
        $this -> theProduct = $product;
        $this -> theRequest = $specificationRequest;
    }

    /**
     * Execute the job.
     * @return AnonymousResourceCollection|void
     */
    public function handle() : AnonymousResourceCollection
    {
        try
        {
            foreach ( $this -> theRequest [ 'data.specifications.data' ] as $specification )
            {
                $Specification = new Specification( $specification );
                $Specification -> product() -> associate( $this -> theRequest [ 'data.relationships.product.product_id' ] );
                $Specification -> save();
            }
            return SpecificationResource::collection( $this -> theProduct -> specifications() -> paginate() );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort(500, 'something went wrong, please try again later');
        }
    }
}
