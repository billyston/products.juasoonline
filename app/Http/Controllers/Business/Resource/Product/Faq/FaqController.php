<?php

namespace App\Http\Controllers\Business\Resource\Product\Faq;

use App\Http\Requests\Business\Resource\Product\Faq\FaqRequest;
use App\Http\Controllers\Controller;
use App\Models\Business\Product\Faq\Faq;
use App\Models\Business\Product\Product\Product;
use App\Repositories\Business\Resource\Product\Faq\FaqRepositoryInterface;
use Illuminate\Http\JsonResponse;

class FaqController extends Controller
{
    private FaqRepositoryInterface $theRepository;

    /**
     * ImageController constructor.
     * @param FaqRepositoryInterface $faqRepository
     */
    public function __construct( FaqRepositoryInterface $faqRepository )
    {
        $this -> theRepository = $faqRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Product $product
     * @return JsonResponse
     */
    public function index( Product $product ) : JsonResponse
    {
        return $this -> theRepository -> index( $product );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Product $product
     * @param FaqRequest $faqRequest
     * @return JsonResponse
     */
    public function store( Product $product, FaqRequest $faqRequest ) : JsonResponse
    {
        return $this -> theRepository -> store( $product, $faqRequest );
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @param Faq $faq
     * @return JsonResponse
     */
    public function show( Product $product, Faq $faq ) : JsonResponse
    {
        return $this -> theRepository -> show( $product, $faq );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Product $product
     * @param FaqRequest $faqRequest
     * @param Faq $faq
     * @return JsonResponse
     */
    public function update( Product $product, FaqRequest $faqRequest, Faq $faq ) : JsonResponse
    {
        return $this -> theRepository -> update( $product, $faqRequest , $faq);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @param Faq $faq
     * @return JsonResponse
     */
    public function destroy( Product $product, Faq $faq ) : JsonResponse
    {
        return $this -> theRepository -> destroy( $product, $faq );
    }
}
