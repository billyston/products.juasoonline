<?php

namespace App\Http\Controllers\Business\Juaso\Subcategory;

use App\Repositories\Business\Juaso\Subcategory\JuasoSubcategoryRepositoryInterface;
use App\Models\Juaso\Subcategory\Subcategory;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class JuasoSubcategoryController extends Controller
{
    private JuasoSubcategoryRepositoryInterface $theRepository;

    /**
     * JuasoSubcategoryController constructor.
     * @param JuasoSubcategoryRepositoryInterface $juasoSubcategoryRepository
     */
    public function __construct( JuasoSubcategoryRepositoryInterface $juasoSubcategoryRepository )
    {
        $this -> theRepository = $juasoSubcategoryRepository;
    }

    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse
    {
        return $this -> theRepository -> index();
    }

    /**
     * @param Subcategory $subcategory
     * @return JsonResponse
     */
    public function show( Subcategory $subcategory ) : JsonResponse
    {
        return $this -> theRepository -> show( $subcategory );
    }
}
