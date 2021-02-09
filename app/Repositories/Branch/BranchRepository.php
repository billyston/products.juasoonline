<?php

namespace App\Repositories\Branch;

use App\Http\Requests\Branch\BranchRequest;
use App\Http\Resources\Branch\BranchResource;
use App\Jobs\Branch\CreateBranch;
use App\Jobs\Branch\UpdateBranch;
use App\Models\Branch\Branch;
use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Exception;

class BranchRepository implements BranchRepositoryInterface
{
    use apiResponseBuilder; use Relatives;

    /**
     * @return JsonResponse|mixed
     */
    public function index() : JsonResponse
    {
        $Branch = Branch::query() -> when( $this -> loadRelationships(), function ( Builder $builder ) { return $builder -> with ( $this -> relationships ); } ) -> paginate( 20 );
        return $this -> successResponse( BranchResource::collection( $Branch ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param BranchRequest $branchRequest
     * @return JsonResponse|mixed
     */
    public function store( BranchRequest $branchRequest ) : JsonResponse
    {
        return $this -> successResponse( ( new CreateBranch( $branchRequest ) ) -> handle(), "Success", "Branch created", Response::HTTP_CREATED );
    }

    /**
     * @param Branch $branch
     * @return JsonResponse|mixed
     */
    public function show( Branch $branch ) : JsonResponse
    {
        if ( $this -> loadRelationships() ) { $branch -> load( $this -> relationships ); }
        return $this -> successResponse( new BranchResource( $branch ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param BranchRequest $branchRequest
     * @param Branch $branch
     * @return JsonResponse|mixed
     */
    public function update( BranchRequest $branchRequest, Branch $branch ) : JsonResponse
    {
        if ( $this -> loadRelationships() ) { $branch -> load( $this -> relationships ); }
        return $this -> successResponse( ( new UpdateBranch( $branchRequest, $branch ) ) -> handle(), 'Success', 'Branch updated', Response::HTTP_OK );
    }

    /**
     * @param Branch $branch
     * @return JsonResponse|mixed|void
     */
    public function destroy( Branch $branch ) : JsonResponse
    {
        try
        {
            $branch -> delete();
            return $this -> successResponse( null, 'Success', 'Branch deleted.', Response::HTTP_NO_CONTENT );
        }

        catch ( Exception $exception )
        {
            report( $exception );
            return abort(500, 'something went wrong, please try again later');
        }
    }
}
