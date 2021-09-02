<?php

namespace App\Jobs\Juaso\Resource\Subcategory;

use App\Http\Requests\Juaso\Resource\Subcategory\SubcategoryRequest;
use App\Http\Resources\Juaso\Resource\Subcategory\SubcategoryResource;
use App\Models\Juaso\Subcategory\Subcategory;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Response;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class UpdateSubcategory implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private SubcategoryRequest $theRequest; private Subcategory $theModel;

    /**
     * UpdateSubcategory constructor.
     * @param SubcategoryRequest $subcategoryRequest
     * @param Subcategory $subcategory
     */
    public function __construct( SubcategoryRequest $subcategoryRequest, Subcategory $subcategory )
    {
        $this -> theRequest     = $subcategoryRequest;
        $this -> theModel       = $subcategory;
    }

    /**
     * @return SubcategoryResource|void
     */
    public function handle() : SubcategoryResource
    {
        try
        {
            $this -> theModel -> update( $this -> theRequest -> validated()[ 'data' ][ 'attributes' ] );
            return new SubcategoryResource( $this -> theModel );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
