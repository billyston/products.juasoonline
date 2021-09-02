<?php

namespace App\Repositories\Juaso\Juasoonline\Customer;

use App\Http\Resources\Juasoonline\Resource\Customer\Customer\CustomerResource;
use App\Models\Juasoonline\Customer\Customer\Customer;

use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Exception;

class JuasoCustomerRepository implements JuasoCustomerRepositoryInterface
{
    use apiResponseBuilder; use Relatives;

    /**
     * @return JsonResponse
     */
    public function index () : JsonResponse
    {
        $Customer = Customer::query() -> when( $this -> loadRelationships(), function ( Builder $builder ) { return $builder -> with ( $this -> relationships ); } ) -> get();
        return $this -> successResponse( CustomerResource::collection( $Customer ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param Customer $customer
     * @return JsonResponse
     */
    public function show ( Customer $customer ) : JsonResponse
    {
        if ( $this -> loadRelationships() ) { $customer -> load( $this -> relationships ); }
        return $this -> successResponse( new CustomerResource( $customer ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param Customer $customer
     * @return JsonResponse|mixed
     */
    public function destroy( Customer $customer ) : JsonResponse
    {
        try
        {
            $customer -> delete();
            return $this -> successResponse( null, 'Success', 'Customer deleted.', Response::HTTP_NO_CONTENT );
        }

        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
