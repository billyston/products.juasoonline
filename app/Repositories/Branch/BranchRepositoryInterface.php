<?php

namespace App\Repositories\Branch;

use App\Http\Requests\Branch\BranchRequest;
use App\Models\Branch\Branch;

interface BranchRepositoryInterface
{
    /**
     * @return mixed
     */
    public function index();

    /**
     * @param BranchRequest $branchRequest
     * @return mixed
     */
    public function store( BranchRequest $branchRequest );

    /**
     * @param Branch $branch
     * @return mixed
     */
    public function show( Branch $branch );

    /**
     * @param BranchRequest $branchRequest
     * @param Branch $branch
     * @return mixed
     */
    public function update( BranchRequest $branchRequest, Branch $branch );

    /**
     * @param Branch $branch
     * @return mixed
     */
    public function destroy( Branch $branch );
}
