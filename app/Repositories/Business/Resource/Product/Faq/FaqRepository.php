<?php

namespace App\Repositories\Business\Resource\Product\Faq;

use App\Http\Requests\Business\Resource\Product\Faq\FaqRequest;
use App\Http\Resources\Business\Resource\Product\Faq\FaqResource;
use App\Jobs\Business\Resource\Product\Faq\CreateFaq;
use App\Jobs\Business\Resource\Product\Faq\UpdateFaq;
use App\Models\Business\Product\Faq\Faq;
use App\Models\Business\Product\Product\Product;

use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Exception;

class FaqRepository implements FaqRepositoryInterface
{
    use apiResponseBuilder, Relatives;

    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function index( Product $product ) : JsonResponse
    {
        return $this -> successResponse( FaqResource::collection( $product -> faqs() -> get() ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param Product $product
     * @param FaqRequest $faqRequest
     * @return JsonResponse
     */
    public function store( Product $product, FaqRequest $faqRequest ) : JsonResponse
    {
        return $this -> successResponse( ( new CreateFaq( $product, $faqRequest ) ) -> handle(), "Success", "Faq(s) created", Response::HTTP_CREATED );
    }

    /**
     * @param Product $product
     * @param Faq $faq
     * @return JsonResponse
     */
    public function show( Product $product, Faq $faq ) : JsonResponse
    {
        checkResourceRelation( $product -> faqs() -> where( 'faqs.id', $faq -> id ) -> count());
        if ( $this -> loadRelationships() ) { $faq -> load( $this -> relationships ); }
        return $this -> successResponse( new FaqResource( $faq ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param Product $product
     * @param FaqRequest $faqRequest
     * @param Faq $faq
     * @return JsonResponse
     */
    public function update( Product $product, FaqRequest $faqRequest, Faq $faq ) : JsonResponse
    {
        checkResourceRelation( $product -> faqs() -> where( 'faqs.id', $faq -> id ) -> count());
        return $this -> successResponse( ( new UpdateFaq( $faqRequest, $faq ) ) -> handle(), 'Success', 'Faq updated', Response::HTTP_OK );
    }

    /**
     * @param Product $product
     * @param Faq $faq
     * @return JsonResponse
     */
    public function destroy( Product $product, Faq $faq ) : JsonResponse
    {
        checkResourceRelation( $product -> faqs() -> where( 'faqs.id', $faq -> id ) -> count());
        try
        {
            $faq -> delete();
            return $this -> successResponse( null, 'Success', 'Faq deleted.', Response::HTTP_NO_CONTENT );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
