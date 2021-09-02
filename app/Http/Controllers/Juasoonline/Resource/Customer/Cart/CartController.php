<?php

namespace App\Http\Controllers\Juasoonline\Resource\Customer\Cart;

use App\Http\Requests\Juasoonline\Resource\Customer\Cart\CartRequest;
use App\Repositories\Juasoonline\Resource\Customer\Cart\CartRepositoryInterface;
use App\Models\Juasoonline\Customer\Cart\Cart;
use App\Models\Juasoonline\Customer\Customer\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class CartController extends Controller
{
    private CartRepositoryInterface $theRepository;

    /**
     * CartController constructor.
     *
     * @param CartRepositoryInterface $cartRepository
     */
    public function __construct( CartRepositoryInterface $cartRepository )
    {
        $this -> theRepository = $cartRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Customer $customer
     * @return JsonResponse
     */
    public function index( Customer $customer ) : JsonResponse
    {
        return $this -> theRepository -> index( $customer );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Customer $customer
     * @param CartRequest $cartRequest
     * @return JsonResponse
     */
    public function store( Customer $customer, CartRequest $cartRequest ) : JsonResponse
    {
        return $this -> theRepository -> store( $customer, $cartRequest );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Customer $customer
     * @param CartRequest $cartRequest
     * @param Cart $cart
     * @return JsonResponse
     */
    public function update( Customer $customer, CartRequest $cartRequest, Cart $cart ) : JsonResponse
    {
        return $this -> theRepository -> update( $customer, $cartRequest, $cart );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Customer $customer
     * @param Cart $cart
     * @return JsonResponse
     */
    public function destroy( Customer $customer, Cart $cart ) : JsonResponse
    {
        return $this -> theRepository -> destroy( $customer, $cart );
    }
}
