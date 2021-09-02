<?php

namespace App\Http\Controllers\Juasoonline\Juaso\Subcategory;

use App\Models\Juaso\Subcategory\Subcategory;
use App\Repositories\Juasoonline\Juaso\Subcategory\JuasoonlineSubcategoryRepository;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class JuasoonlineSubcategoryController extends Controller
{
    private JuasoonlineSubcategoryRepository $theRepository;

    /**
     * JuasoonlineSubcategoryController constructor.
     * @param JuasoonlineSubcategoryRepository $juasoonlineSubcategoryRepository
     */
    public function __construct( JuasoonlineSubcategoryRepository $juasoonlineSubcategoryRepository )
    {
        $this -> theRepository = $juasoonlineSubcategoryRepository;
    }

    /**
     * @return JsonResponse
     */
    public function getSubcategories() : JsonResponse
    {
        return $this -> theRepository -> getSubcategories();
    }

    /**
     * @param Subcategory $subcategory
     * @return JsonResponse
     */
    public function getSubcategory( Subcategory $subcategory ) : JsonResponse
    {
        return $this -> theRepository -> getSubcategory( $subcategory );
    }
}
