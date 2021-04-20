<?php

namespace App\Repositories\Others\Group;

use App\Http\Requests\Others\Group\GroupRequest;
use App\Http\Resources\Others\Group\GroupResource;
use App\Jobs\Others\Group\CreateGroup;
use App\Jobs\Others\Group\UpdateGroup;
use App\Models\Others\Group\Group;
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
    public function index() : JsonResponse
    {
        $Group = Group::query() -> when( $this -> loadRelationships(), function ( Builder $builder ) { return $builder -> with ( $this -> relationships ); } ) -> paginate( 20 );
        return $this -> successResponse( GroupResource::collection( $Group ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param GroupRequest $groupRequest
     * @return JsonResponse|mixed
     */
    public function store( GroupRequest $groupRequest ) : JsonResponse
    {
        return $this -> successResponse( ( new CreateGroup( $groupRequest ) ) -> handle(), "Success", "Group created", Response::HTTP_CREATED );
    }

    /**
     * @param Group $group
     * @return JsonResponse|mixed
     */
    public function show( Group $group ) : JsonResponse
    {
        if ( $this -> loadRelationships() ) { $group -> load( $this -> relationships ); }
        return $this -> successResponse( new GroupResource( $group ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param GroupRequest $groupRequest
     * @param Group $group
     * @return JsonResponse|mixed
     */
    public function update( GroupRequest $groupRequest, Group $group ) : JsonResponse
    {
        return $this -> successResponse( ( new UpdateGroup( $groupRequest, $group ) ) -> handle(), 'Success', 'Group updated', Response::HTTP_OK );
    }

    /**
     * @param Group $group
     * @return JsonResponse|mixed
     * @throws \Exception
     */
    public function destroy( Group $group ) : JsonResponse
    {
        $group -> delete();
        return $this -> successResponse( null, 'Success', 'Group deleted', Response::HTTP_NO_CONTENT );
    }
}
