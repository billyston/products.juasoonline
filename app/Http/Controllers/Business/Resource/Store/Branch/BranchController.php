<?php

namespace App\Http\Controllers\Business\Resource\Store\Branch;

use App\Http\Requests\Business\Resource\Store\Branch\BranchRequest;
use App\Repositories\Business\Resource\Store\Branch\BranchRepositoryInterface;
use App\Models\Business\Store\Branch\Branch;
use App\Models\Business\Store\Store\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class BranchController extends Controller
{
    private BranchRepositoryInterface $theRepository;

    /**
     * BranchController constructor.
     * @param BranchRepositoryInterface $branchRepository
     */
    public function __construct( BranchRepositoryInterface $branchRepository )
    {
        $this -> theRepository = $branchRepository;
    }

    /**
     * @return JsonResponse|mixed
     */
    public function index( Store $store ) : JsonResponse
    {
        return $this -> theRepository -> index( $store );
    }

    /**
     * @param Store $store
     * @param BranchRequest $branchRequest
     * @return JsonResponse|mixed
     */
    public function store( Store $store, BranchRequest $branchRequest ) : JsonResponse
    {
        return $this -> theRepository -> store( $store, $branchRequest );
    }

    /**
     * @param Store $store
     * @param Branch $branch
     * @return JsonResponse|mixed
     */
    public function show( Store $store, Branch $branch ) : JsonResponse
    {
        return $this -> theRepository -> show( $store, $branch );
    }

    /**
     * @param Store $store
     * @param BranchRequest $branchRequest
     * @param Branch $branch
     * @return JsonResponse|mixed
     */
    public function update( Store $store, BranchRequest $branchRequest, Branch $branch ) : JsonResponse
    {
        return $this -> theRepository -> update( $store, $branchRequest, $branch );
    }

    /**
     * @param Store $store
     * @param Branch $branch
     * @return JsonResponse|mixed
     */
    public function destroy( Store $store, Branch $branch ) : JsonResponse
    {
        return $this -> theRepository -> destroy( $store, $branch );
    }
}
