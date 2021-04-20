<?php

namespace App\Http\Controllers\Others\Group;

use App\Http\Controllers\Controller;
use App\Http\Requests\Others\Group\GroupRequest;
use App\Models\Others\Group\Group;
use App\Repositories\Others\Group\GroupRepositoryInterface;

class GroupController extends Controller
{
    private $theRepository;

    /**
     * GroupController constructor.
     * @param GroupRepositoryInterface $groupRepository
     */
    public function __construct( GroupRepositoryInterface $groupRepository )
    {
        $this -> theRepository = $groupRepository;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        return $this -> theRepository -> index();
    }

    /**
     * @param GroupRequest $groupRequest
     * @return mixed
     */
    public function store( GroupRequest $groupRequest )
    {
        return $this -> theRepository -> store( $groupRequest );
    }

    /**
     * @param Group $group
     * @return mixed
     */
    public function show( Group $group )
    {
        return $this -> theRepository -> show( $group );
    }

    /**
     * @param GroupRequest $groupRequest
     * @param Group $group
     * @return mixed
     */
    public function update( GroupRequest $groupRequest, Group $group )
    {
        return $this -> theRepository -> update( $groupRequest, $group );
    }

    /**
     * @param Group $group
     * @return mixed
     */
    public function destroy( Group $group )
    {
        return $this -> theRepository -> destroy( $group );
    }
}
