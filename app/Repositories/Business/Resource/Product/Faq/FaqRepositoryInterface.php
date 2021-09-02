<?php

namespace App\Repositories\Business\Resource\Product\Faq;

use App\Http\Requests\Business\Resource\Product\Faq\FaqRequest;
use App\Models\Business\Product\Faq\Faq;
use App\Models\Business\Product\Product\Product;
use Illuminate\Http\JsonResponse;

interface FaqRepositoryInterface
{
    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function index( Product $product ) : JsonResponse;

    /**
     * @param Product $product
     * @param FaqRequest $faqRequest
     * @return JsonResponse
     */
    public function store( Product $product, FaqRequest $faqRequest ) : JsonResponse;

    /**
     * @param Product $product
     * @param Faq $faq
     * @return JsonResponse
     */
    public function show( Product $product, Faq $faq ) : JsonResponse;

    /**
     * @param Product $product
     * @param FaqRequest $faqRequest
     * @param Faq $faq
     * @return JsonResponse
     */
    public function update( Product $product, FaqRequest $faqRequest, Faq $faq ) : JsonResponse;

    /**
     * @param Product $product
     * @param Faq $faq
     * @return JsonResponse
     */
    public function destroy( Product $product, Faq $faq ) : JsonResponse;
}
