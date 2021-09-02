<?php

namespace App\Repositories\Juasoonline\Resource\Customer\Wishlist;

use App\Http\Requests\Juasoonline\Resource\Customer\Wishlist\WishlistRequest;
use App\Models\Juasoonline\Customer\Customer\Customer;
use App\Models\Juasoonline\Customer\Wishlist\Wishlist;

use Illuminate\Http\JsonResponse;

interface WishlistRepositoryInterface
{
    /**
     * @param Customer $customer
     * @return JsonResponse
     */
    public function index( Customer $customer ) : JsonResponse;

    /**
     * @param Customer $customer
     * @param WishlistRequest $wishlistRequest
     * @return JsonResponse
     */
    public function store( Customer $customer, WishlistRequest $wishlistRequest ) : JsonResponse;

    /**
     * @param Customer $customer
     * @param Wishlist $wishlist
     * @return JsonResponse
     */
    public function show( Customer $customer, Wishlist $wishlist ) : JsonResponse;

    /**
     * @param Customer $customer
     * @param WishlistRequest $wishlistRequest
     * @param Wishlist $wishlist
     * @return JsonResponse
     */
    public function update( Customer $customer, WishlistRequest $wishlistRequest, Wishlist $wishlist ) : JsonResponse;

    /**
     * @param Customer $customer
     * @param Wishlist $wishlist
     * @return JsonResponse
     */
    public function destroy( Customer $customer, Wishlist $wishlist ) : JsonResponse;
}
