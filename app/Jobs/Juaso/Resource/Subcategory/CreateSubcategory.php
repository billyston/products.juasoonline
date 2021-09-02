<?php

namespace App\Jobs\Juaso\Resource\Subcategory;

use App\Http\Requests\Juaso\Resource\Subcategory\SubcategoryRequest;
use App\Http\Resources\Juaso\Resource\Subcategory\SubcategoryResource;
use App\Models\Juaso\Subcategory\Subcategory;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class CreateSubcategory implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private SubcategoryRequest $theRequest;

    /**
     * CreateSubcategory constructor.
     * @param SubcategoryRequest $subcategoryRequest
     */
    public function __construct( SubcategoryRequest $subcategoryRequest )
    {
        $this -> theRequest = $subcategoryRequest;
    }

    /**
     * @return SubcategoryResource|void
     */
    public function handle()
    {
        try
        {
            $Subcategory = new Subcategory( $this -> theRequest -> input( 'data.attributes' ) );
            $Subcategory -> category() -> associate( $this -> theRequest [ 'data.relationships.category.category_id' ] );
            $Subcategory -> save();

            $Subcategory -> refresh();
            return ( new SubcategoryResource( $Subcategory ) );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort(500, 'something went wrong, please try again later');
        }
    }
}
