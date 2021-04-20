<?php

namespace App\Jobs\Others\Subcategory;

use App\Http\Requests\Others\Subcategory\SubcategoryRequest;
use App\Http\Resources\Others\Subcategory\SubcategoryResource;
use App\Models\Others\Subcategory\Subcategory;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class UpdateSubcategory implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $theRequest; private $theModel;

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
    public function handle()
    {
        try
        {
            $this -> theModel -> update( $this -> theRequest -> validated()[ 'data' ][ 'attributes' ] );
            return new SubcategoryResource( $this -> theModel );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort(500, 'something went wrong, please try again later');
        }
    }
}
