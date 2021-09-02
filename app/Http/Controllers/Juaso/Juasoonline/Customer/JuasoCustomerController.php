<?php

namespace App\Http\Controllers\Juaso\Juasoonline\Customer;

use App\Repositories\Juaso\Juasoonline\Customer\JuasoCustomerRepositoryInterface;
use App\Models\Juasoonline\Customer\Customer\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class JuasoCustomerController extends Controller
{
    private JuasoCustomerRepositoryInterface $theRepository;

    /**
     * JuasoCustomerController constructor.
     * @param JuasoCustomerRepositoryInterface $juasoCustomerRepository
     */
    public function __construct( JuasoCustomerRepositoryInterface $juasoCustomerRepository )
    {
        $this -> theRepository = $juasoCustomerRepository;
    }

    /**
     * @return JsonResponse
     */
    public function index () : JsonResponse
    {
        return $this -> theRepository -> index();
    }

    /**
     * @param Customer $customer
     * @return JsonResponse
     */
    public function show ( Customer $customer ) : JsonResponse
    {
        return $this -> theRepository -> show( $customer );
    }

    /**
     * @param Customer $customer
     * @return JsonResponse
     */
    public function destroy ( Customer $customer ) : JsonResponse
    {
        return $this -> theRepository -> destroy( $customer );
    }
}
