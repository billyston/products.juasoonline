<?php

namespace App\Jobs\Others\Category;

use App\Http\Requests\Others\Category\CategoryRequest;
use App\Http\Resources\Others\Category\CategoryResource;
use App\Models\Others\Category\Category;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class UpdateCategory implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $theRequest; private $theModel;

    /**
     * UpdateCategory constructor.
     * @param CategoryRequest $categoryRequest
     * @param Category $category
     */
    public function __construct( CategoryRequest $categoryRequest, Category $category )
    {
        $this -> theRequest     = $categoryRequest;
        $this -> theModel       = $category;
    }

    /**
     * @return CategoryResource|void
     */
    public function handle()
    {
        try
        {
            $this -> theModel -> update( $this -> theRequest -> validated()[ 'data' ][ 'attributes' ] );
            return new CategoryResource( $this -> theModel );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort(500, 'something went wrong, please try again later');
        }
    }
}
