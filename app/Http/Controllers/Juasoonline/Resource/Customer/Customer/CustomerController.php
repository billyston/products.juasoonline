<?php

namespace App\Http\Controllers\Juasoonline\Resource\Customer\Customer;

use App\Http\Requests\Business\Resource\Product\Faq\FaqRequest;
use App\Repositories\Juasoonline\Resource\Customer\Customer\CustomerRepositoryInterface;
use App\Http\Requests\Business\Resource\Product\Review\ReviewRequest;
use App\Http\Requests\Juasoonline\Resource\Customer\Customer\CustomerRequest;
use App\Http\Requests\Business\Resource\Store\StoreReview\StoreReviewRequest;
use App\Models\Business\Product\Product\Product;
use App\Models\Business\Store\Store\Store;
use App\Models\Juasoonline\Customer\Customer\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class CustomerController extends Controller
{
    private CustomerRepositoryInterface $theRepository;

    /**
     * CustomerController constructor.
     *
     * @param CustomerRepositoryInterface $customersRepository
     */
    public function __construct( CustomerRepositoryInterface $customersRepository )
    {
        $this -> theRepository = $customersRepository;
    }

    /**
     * @param CustomerRequest $customerRequest
     * @return JsonResponse|mixed
     */
    public function store( CustomerRequest $customerRequest ) : JsonResponse
    {
        return $this -> theRepository -> store( $customerRequest );
    }

    /**
     * @param Customer $customer
     * @return JsonResponse|mixed
     */
    public function show( Customer $customer ) : JsonResponse
    {
        return $this -> theRepository -> show( $customer );
    }

    /**
     * @param CustomerRequest $customerRequest
     * @param Customer $customer
     * @return JsonResponse
     */
    public function update( CustomerRequest $customerRequest, Customer $customer ) : JsonResponse
    {
        return $this -> theRepository -> update( $customerRequest, $customer );
    }

    /**
     * @param Customer $customer
     * @return JsonResponse
     */
    public function getStats( Customer $customer ) : JsonResponse
    {
        return $this -> theRepository -> getStats( $customer );
    }

    /**
     * @param Customer $customer
     * @param Product $product
     * @param ReviewRequest $reviewRequest
     * @return JsonResponse
     */
    public function createProductReview( Customer $customer, Product $product, ReviewRequest $reviewRequest ) : JsonResponse
    {
        return $this -> theRepository -> createProductReview( $customer, $product, $reviewRequest );
    }

    /**
     * @param Customer $customer
     * @param Product $product
     * @param FaqRequest $faqRequest
     * @return JsonResponse
     */
    public function createProductFaq( Customer $customer, Product $product, FaqRequest $faqRequest ) : JsonResponse
    {
        return $this -> theRepository -> createProductFaq( $customer, $product, $faqRequest );
    }

    /**
     * @param Customer $customer
     * @param Store $store
     * @param StoreReviewRequest $storeReviewRequest
     * @return JsonResponse
     */
    public function createStoreReview( Customer $customer, Store $store, StoreReviewRequest $storeReviewRequest ) : JsonResponse
    {
        return $this -> theRepository -> createStoreReview( $customer, $store, $storeReviewRequest );
    }
}
