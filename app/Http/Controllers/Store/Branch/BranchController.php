<?php

namespace App\Http\Controllers\Store\Branch;

use App\Http\Controllers\Controller;
use App\Http\Requests\Store\Branch\BranchRequest;
use App\Models\Store\Branch\Branch;
use App\Repositories\Store\Branch\BranchRepositoryInterface;

class BranchController extends Controller
{
    private $theRepository;

    /**
     * BranchController constructor.
     * @param BranchRepositoryInterface $branchRepository
     */
    public function __construct( BranchRepositoryInterface $branchRepository )
    {
        $this -> theRepository = $branchRepository;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        return $this -> theRepository -> index();
    }

    /**
     * @param BranchRequest $branchRequest
     * @return mixed
     */
    public function store( BranchRequest $branchRequest )
    {
        return $this -> theRepository -> store( $branchRequest );
    }

    /**
     * @param Branch $branch
     * @return mixed
     */
    public function show( Branch $branch )
    {
        return $this -> theRepository -> show( $branch );
    }

    /**
     * @param BranchRequest $branchRequest
     * @param Branch $branch
     * @return mixed
     */
    public function update( BranchRequest $branchRequest, Branch $branch )
    {
        return $this -> theRepository -> update( $branchRequest, $branch );
    }

    /**
     * @param Branch $branch
     * @return mixed
     */
    public function destroy( Branch $branch )
    {
        return $this -> theRepository -> destroy( $branch );
    }
}
