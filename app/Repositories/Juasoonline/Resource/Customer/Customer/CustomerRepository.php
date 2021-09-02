<?php

namespace App\Repositories\Juasoonline\Resource\Customer\Customer;

use App\Http\Requests\Business\Resource\Product\Faq\FaqRequest;
use App\Http\Requests\Business\Resource\Product\Review\ReviewRequest;
use App\Http\Requests\Business\Resource\Store\StoreReview\StoreReviewRequest;
use App\Jobs\Business\Resource\Product\Review\CreateReview;
use App\Jobs\Business\Resource\Store\StoreReview\CreateStoreReview;
use App\Jobs\Juasoonline\Resource\Customer\Customer\CreateCustomer;
use App\Jobs\Juasoonline\Resource\Customer\Customer\UpdateCustomer;
use App\Http\Requests\Juasoonline\Resource\Customer\Customer\CustomerRequest;
use App\Http\Resources\Juasoonline\Resource\Customer\Customer\CustomerResource;
use App\Http\Resources\Juasoonline\Resource\Customer\Stats\StatsResource;
use App\Models\Business\Product\Faq\Faq;
use App\Models\Business\Product\Product\Product;
use App\Models\Business\Store\Store\Store;
use App\Models\Juasoonline\Customer\Customer\Customer;

use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Exception;

class CustomerRepository implements CustomerRepositoryInterface
{
    use apiResponseBuilder, Relatives;

    /**
     * @param CustomerRequest $customerRequest
     * @return JsonResponse|mixed
     */
    public function store( CustomerRequest $customerRequest ) : JsonResponse
    {
        return $this -> successResponse( ( new CreateCustomer( $customerRequest ) ) -> handle(), "Success", "Customer created", Response::HTTP_CREATED );
    }

    /**
     * @param Customer $customer
     * @return JsonResponse|mixed
     */
    public function show( Customer $customer ) : JsonResponse
    {
        if ( $this -> loadRelationships() ) { $customer -> load( $this -> relationships ); }
        return $this -> successResponse( new CustomerResource( $customer ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param CustomerRequest $customerRequest
     * @param Customer $customer
     * @return JsonResponse
     */
    public function update( CustomerRequest $customerRequest, Customer $customer ) : JsonResponse
    {
        if ( $this -> loadRelationships() ) { $customer -> load( $this -> relationships ); }
        return $this -> successResponse( ( new UpdateCustomer( $customerRequest, $customer ) ) -> handle(), 'Success', 'Customer updated', Response::HTTP_OK );
    }

    /**
     * @param Customer $customer
     * @return JsonResponse
     */
    public function getStats( Customer $customer ) : JsonResponse
    {
        return $this -> successResponse( new StatsResource( $customer ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param Customer $customer
     * @param Product $product
     * @param ReviewRequest $reviewRequest
     * @return JsonResponse
     */
    public function createProductReview( Customer $customer, Product $product, ReviewRequest $reviewRequest ) : JsonResponse
    {
        return $this -> successResponse( ( new CreateReview( $customer, $product, $reviewRequest ) ) -> handle(), "Success", "Product Review created", Response::HTTP_CREATED );
    }

    /**
     * @param Customer $customer
     * @param Product $product
     * @param FaqRequest $faqRequest
     * @return JsonResponse|mixed
     */
    public function createProductFaq( Customer $customer, Product $product, FaqRequest $faqRequest ) : JsonResponse
    {
        try
        {
            $Faq = new Faq( $faqRequest -> input( 'data.attributes' ) );
            $Faq -> customer() -> associate( $customer -> id );
            $Faq -> product() -> associate( $product -> id );
            $Faq -> save();

            $Faq -> refresh();
            return $this -> successResponse( null, "Success", "Question created", Response::HTTP_CREATED );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }

    /**
     * @param Customer $customer
     * @param Store $store
     * @param StoreReviewRequest $storeReviewRequest
     * @return JsonResponse
     */
    public function createStoreReview( Customer $customer, Store $store, StoreReviewRequest $storeReviewRequest ) : JsonResponse
    {
        return $this -> successResponse( ( new CreateStoreReview( $customer, $store, $storeReviewRequest ) ) -> handle(), "Success", "Product Review created", Response::HTTP_CREATED );
    }
}
