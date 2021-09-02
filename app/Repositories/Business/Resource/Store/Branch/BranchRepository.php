<?php

namespace App\Repositories\Business\Resource\Store\Branch;

use App\Http\Requests\Business\Resource\Store\Branch\BranchRequest;
use App\Http\Resources\Business\Resource\Store\Branch\BranchResource;
use App\Jobs\Business\Resource\Store\Branch\CreateBranch;
use App\Jobs\Business\Resource\Store\Branch\UpdateBranch;
use App\Models\Business\Store\Branch\Branch;
use App\Models\Business\Store\Store\Store;

use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class BranchRepository implements BranchRepositoryInterface
{
    use apiResponseBuilder; use Relatives;

    /**
     * @return JsonResponse|mixed
     */
    public function index( Store $store ) : JsonResponse
    {
        return $this -> successResponse( BranchResource::collection( $store -> branches() -> paginate() ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param Store $store
     * @param BranchRequest $branchRequest
     * @return JsonResponse|mixed
     */
    public function store( Store $store, BranchRequest $branchRequest ) : JsonResponse
    {
        return $this -> successResponse( ( new CreateBranch( $branchRequest ) ) -> handle(), "Success", "Branch created", Response::HTTP_CREATED );
    }

    /**
     * @param Store $store
     * @param Branch $branch
     * @return JsonResponse|mixed
     */
    public function show( Store $store, Branch $branch ) : JsonResponse
    {
        checkResourceRelation( $store -> branches() -> where( 'branches.id', $branch -> id ) -> count());
        if ( $this -> loadRelationships() ) { $branch -> load( $this -> relationships ); }
        return $this -> successResponse( new BranchResource( $branch ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param Store $store
     * @param BranchRequest $branchRequest
     * @param Branch $branch
     * @return JsonResponse|mixed
     */
    public function update( Store $store, BranchRequest $branchRequest, Branch $branch ) : JsonResponse
    {
        checkResourceRelation( $store -> branches() -> where( 'branches.id', $branch -> id ) -> count());
        if ( $this -> loadRelationships() ) { $branch -> load( $this -> relationships ); }
        return $this -> successResponse( ( new UpdateBranch( $branchRequest, $branch ) ) -> handle(), 'Success', 'Branch updated', Response::HTTP_OK );
    }

    /**
     * @param Store $store
     * @param Branch $branch
     * @return JsonResponse|mixed|void
     */
    public function destroy( Store $store, Branch $branch ) : JsonResponse
    {
        checkResourceRelation( $store -> branches() -> where( 'branches.id', $branch -> id ) -> count());
        $branch -> delete();
        return $this -> successResponse( null, 'Success', 'Branch deleted.', Response::HTTP_NO_CONTENT );
    }
}
