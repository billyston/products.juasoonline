<?php

namespace App\Http\Controllers\Juasoonline\Juaso\Category;

use App\Models\Juaso\Category\Category;
use App\Repositories\Juasoonline\Juaso\Category\JuasoonlineCategoryRepositoryInterface;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class JuasoonlineCategoryController extends Controller
{
    private JuasoonlineCategoryRepositoryInterface $theRepository;

    /**
     * JuasoonlineCategoryController constructor.
     * @param JuasoonlineCategoryRepositoryInterface $juasoonlineCategoryRepository
     */
    public function __construct( JuasoonlineCategoryRepositoryInterface $juasoonlineCategoryRepository )
    {
        $this -> theRepository = $juasoonlineCategoryRepository;
    }

    /**
     * @return JsonResponse
     */
    public function getCategories() : JsonResponse
    {
        return $this -> theRepository -> getCategories();
    }

    /**
     * @param Category $category
     * @return JsonResponse
     */
    public function getCategory( Category $category ) : JsonResponse
    {
        return $this -> theRepository -> getCategory( $category );
    }
}
