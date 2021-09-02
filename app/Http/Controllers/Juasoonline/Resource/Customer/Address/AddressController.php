<?php

namespace App\Http\Controllers\Juasoonline\Resource\Customer\Address;

use App\Http\Requests\Juasoonline\Resource\Customer\Address\AddressRequest;
use App\Repositories\Juasoonline\Resource\Customer\Address\AddressRepositoryInterface;
use App\Models\Juasoonline\Customer\Address\Address;
use App\Models\Juasoonline\Customer\Customer\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class AddressController extends Controller
{
    private AddressRepositoryInterface $theRepository;

    /**
     * AddressController constructor.
     *
     * @param AddressRepositoryInterface $addressRepository
     */
    public function __construct( AddressRepositoryInterface $addressRepository )
    {
        $this -> theRepository = $addressRepository;
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
     * @param AddressRequest $addressesRequest
     * @return JsonResponse
     */
    public function store( Customer $customer, AddressRequest $addressesRequest ) : JsonResponse
    {
        return $this -> theRepository -> store( $customer, $addressesRequest );
    }

    /**
     * Display the specified resource.
     *
     * @param Customer $customer
     * @param Address $address
     * @return JsonResponse
     */
    public function show( Customer $customer, Address $address ) : JsonResponse
    {
        return $this -> theRepository -> show( $customer, $address );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Customer $customer
     * @param AddressRequest $addressesRequest
     * @param Address $address
     * @return JsonResponse
     */
    public function update( Customer $customer, AddressRequest $addressesRequest, Address $address ) : JsonResponse
    {
        return $this -> theRepository -> update( $customer, $addressesRequest, $address );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Customer $customer
     * @param Address $address
     * @return JsonResponse
     */
    public function destroy( Customer $customer, Address $address ) : JsonResponse
    {
        return $this -> theRepository -> destroy( $customer, $address );
    }
}
