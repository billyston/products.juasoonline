<?php

namespace App\Http\Controllers\Business\Juaso\Category;

use App\Http\Controllers\Controller;
use App\Models\Juaso\Category\Category;
use App\Repositories\Business\Juaso\Category\JuasoCategoryRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class JuasoCategoryController extends Controller
{
    private JuasoCategoryRepositoryInterface $theRepository;

    /**
     * JuasoCategoryController constructor.
     * @param JuasoCategoryRepositoryInterface $juasoCategoryRepository
     */
    public function __construct( JuasoCategoryRepositoryInterface $juasoCategoryRepository )
    {
        $this -> theRepository = $juasoCategoryRepository;
    }

    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse
    {
        return $this -> theRepository -> index();
    }

    /**
     * @param Category $category
     * @return JsonResponse
     */
    public function show( Category $category ) : JsonResponse
    {
        return $this -> theRepository -> show( $category );
    }
}
