<?php

namespace App\Repositories\Group;

use App\Http\Requests\Group\GroupRequest;
use App\Http\Resources\Group\GroupResource;
use App\Jobs\Group\StoreGroup;
use App\Jobs\Group\UpdateGroup;
use App\Models\Group\Group;
use App\Traits\apiResponseBuilder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class GroupRepository implements GroupRepositoryInterface
{
    use apiResponseBuilder;

    /**
     * @return JsonResponse|mixed
     */
    public function index()
    {
        return $this -> successResponse( GroupResource::collection( Group::paginate( 20 ) ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param GroupRequest $groupRequest
     * @return JsonResponse|mixed
     */
    public function store( GroupRequest $groupRequest )
    {
        return $this -> successResponse( ( new StoreGroup( $groupRequest ) ) -> handle(), "Success", "Group created successfully", Response::HTTP_CREATED );
    }

    /**
     * @param Group $group
     * @return JsonResponse|mixed
     */
    public function show( Group $group )
    {
        return $this -> successResponse( new GroupResource( $group ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param GroupRequest $groupRequest
     * @param Group $group
     * @return JsonResponse|mixed
     */
    public function update( GroupRequest $groupRequest, Group $group )
    {
        return $this -> successResponse( ( new UpdateGroup( $groupRequest, $group ) ) -> handle(), 'Success', 'Group updated successfully', Response::HTTP_OK );
    }

    /**
     * @param Group $group
     * @return JsonResponse|mixed
     * @throws \Exception
     */
    public function destroy( Group $group )
    {
        $group -> delete();
        return $this -> successResponse( null, 'Success', 'Group deleted successfully', Response::HTTP_NO_CONTENT );
    }
}
