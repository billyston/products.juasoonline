<?php

namespace App\Repositories\Group;

use App\Http\Requests\Group\GroupRequest;
use App\Http\Resources\Group\GroupResource;
use App\Jobs\Group\CreateGroup;
use App\Jobs\Group\UpdateGroup;
use App\Models\Group\Group;
use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class GroupRepository implements GroupRepositoryInterface
{
    use apiResponseBuilder; use Relatives;

    /**
     * @return JsonResponse|mixed
     */
    public function index()
    {
        $Group = Group::query() -> when( $this -> loadRelationships(), function ( Builder $builder ) { return $builder -> with ( $this -> relationships ); } ) -> paginate( 20 );
        return $this -> successResponse( GroupResource::collection( $Group ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param GroupRequest $groupRequest
     * @return JsonResponse|mixed
     */
    public function store( GroupRequest $groupRequest )
    {
        return $this -> successResponse( ( new CreateGroup( $groupRequest ) ) -> handle(), "Success", "Group created successfully", Response::HTTP_CREATED );
    }

    /**
     * @param Group $group
     * @return JsonResponse|mixed
     */
    public function show( Group $group )
    {
        if ( $this -> loadRelationships() ) { $group -> load( $this -> relationships ); }
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
