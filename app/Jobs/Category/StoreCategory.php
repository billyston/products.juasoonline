<?php

namespace App\Jobs\Category;

use App\Http\Requests\Category\CategoryRequest;
use App\Http\Resources\Category\CategoryResource;
use App\Models\Category\Category;
use App\Traits\apiResponseBuilder;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class StoreCategory implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    use apiResponseBuilder; private $theRequest;

    /**
     * StoreCategory constructor.
     * @param CategoryRequest $categoryRequest
     */
    public function __construct( CategoryRequest $categoryRequest )
    {
        $this -> theRequest = $categoryRequest;
    }

    public function handle()
    {
        try
        {
            $Category = new Category( $this -> theRequest -> input( 'data.attributes' ) );
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
