<?php

namespace App\Jobs\Others\Group;

use App\Http\Requests\Others\Group\GroupRequest;
use App\Http\Resources\Others\Group\GroupResource;
use App\Models\Others\Group\Group;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class UpdateGroup implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $theRequest; private $theModel;

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
