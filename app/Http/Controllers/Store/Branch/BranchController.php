<?php

namespace App\Http\Controllers\Store\Branch;

use App\Http\Controllers\Controller;
use App\Http\Requests\Store\Branch\BranchRequest;
use App\Models\Store\Branch\Branch;
use App\Models\Store\Store;
use App\Repositories\Store\Branch\BranchRepositoryInterface;
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
