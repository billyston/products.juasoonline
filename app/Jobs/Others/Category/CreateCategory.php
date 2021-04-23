<?php

namespace App\Jobs\Others\Category;

use App\Http\Requests\Others\Category\CategoryRequest;
use App\Http\Resources\Others\Category\CategoryResource;
use App\Models\Others\Category\Category;
use App\Traits\apiResponseBuilder;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class CreateCategory implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels, apiResponseBuilder;
    private CategoryRequest $theRequest;

    /**
     * CreateCategory constructor.
     * @param CategoryRequest $categoryRequest
     */
    public function __construct( CategoryRequest $categoryRequest )
    {
        $this -> theRequest = $categoryRequest;
    }

    /**
     * @return CategoryResource|void
     */
    public function handle() : CategoryResource
    {
        try
        {
            $Category = new Category( $this -> theRequest -> input( 'data.attributes' ) );
            $Category -> group() -> associate( $this -> theRequest [ 'data.relationships.group.group_id' ] );
            $Category -> save();

            $Category -> refresh();
            return ( new CategoryResource( $Category ) );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort(500, 'something went wrong, please try again later');
        }
    }
}
