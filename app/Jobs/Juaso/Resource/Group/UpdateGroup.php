<?php

namespace App\Jobs\Juaso\Resource\Group;

use App\Http\Requests\Juaso\Resource\Group\GroupRequest;
use App\Http\Resources\Juaso\Resource\Group\GroupResource;
use App\Models\Juaso\Group\Group;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class UpdateGroup implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private GroupRequest $theRequest; private Group $theModel;

    /**
     * UpdateGroup constructor.
     * @param GroupRequest $groupRequest
     * @param Group $group
     */
    public function __construct( GroupRequest $groupRequest, Group $group )
    {
        $this -> theRequest     = $groupRequest;
        $this -> theModel       = $group;
    }

    /**
     * @return GroupResource|void
     */
    public function handle()
    {
        try
        {
            $this -> theModel -> update( $this -> theRequest -> validated()[ 'data' ][ 'attributes' ] );
            return new GroupResource( $this -> theModel );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort(500, 'something went wrong, please try again later');
        }
    }
}
