<?php

namespace App\Repositories\Store\Branch;

use App\Http\Requests\Store\Branch\BranchRequest;
use App\Models\Store\Branch\Branch;
use App\Models\Store\Store;
use Illuminate\Http\JsonResponse;

interface BranchRepositoryInterface
{
    /**
     * @return JsonResponse|mixed
     */
    public function index( Store $store ) : JsonResponse;

    /**
     * @param Store $store
     * @param BranchRequest $branchRequest
     * @return JsonResponse|mixed
     */
    public function store( Store $store, BranchRequest $branchRequest ) : JsonResponse;

    /**
     * @param Store $store
     * @param Branch $branch
     * @return JsonResponse|mixed
     */
    public function show( Store $store, Branch $branch ) : JsonResponse;

    /**
     * @param Store $store
     * @param BranchRequest $branchRequest
     * @param Branch $branch
     * @return mixed
     */
    public function update( Store $store, BranchRequest $branchRequest, Branch $branch ) : JsonResponse;

    /**
     * @param Store $store
     * @param Branch $branch
     * @return JsonResponse|mixed
     */
    public function destroy( Store $store, Branch $branch ) : JsonResponse;
}
