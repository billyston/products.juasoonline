<?php

namespace App\Jobs\Others\Group;

use App\Http\Requests\Others\Group\GroupRequest;
use App\Http\Resources\Others\Group\GroupResource;
use App\Models\Others\Group\Group;
use App\Traits\apiResponseBuilder;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class CreateGroup implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    use apiResponseBuilder; private $theRequest;

    /**
     * CreateGroup constructor.
     * @param GroupRequest $groupRequest
     */
    public function __construct( GroupRequest $groupRequest )
    {
        $this -> theRequest = $groupRequest;
    }

    /**
     * @return GroupResource|void
     */
    public function handle() : GroupResource
    {
        try
        {
            $Group = new Group( $this -> theRequest -> input( 'data.attributes' ) );
            $Group -> save();

            $Group -> refresh();
            return ( new GroupResource( $Group ) );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort(500, 'something went wrong, please try again later');
        }
    }
}
