<?php

namespace App\Http\Controllers\Business\Resource\Store\Follower;

use App\Repositories\Business\Resource\Store\Follower\FollowerRepositoryInterface;
use App\Models\Business\Store\Store\Store;
use App\Models\Juasoonline\Customer\Customer\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class FollowerController extends Controller
{
    private FollowerRepositoryInterface $theRepository;

    /**
     * BranchController constructor.
     * @param FollowerRepositoryInterface $followerRepository
     */
    public function __construct( FollowerRepositoryInterface $followerRepository )
    {
        $this -> theRepository = $followerRepository;
    }

    /**
     * @param Store $store
     * @return JsonResponse
     */
    public function index( Store $store ) : JsonResponse
    {
        return $this -> theRepository -> index( $store );
    }

    /**
     * @param Store $store
     * @param Customer $customer
     * @return JsonResponse
     */
    public function show( Store $store, Customer $customer ) : JsonResponse
    {
        return $this -> theRepository -> show( $store, $customer );
    }
}
