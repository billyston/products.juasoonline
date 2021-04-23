<?php

namespace App\Http\Controllers\Others\Subcategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Others\Subcategory\SubcategoryRequest;
use App\Models\Others\Subcategory\Subcategory;
use App\Repositories\Others\Subcategory\SubcategoryRepositoryInterface;

class SubcategoryController extends Controller
{
    private $theRepository;

    /**
     * SubcategoryController constructor.
     * @param SubcategoryRepositoryInterface $subcategoryRepository
     */
    public function __construct( SubcategoryRepositoryInterface $subcategoryRepository )
    {
        $this -> theRepository = $subcategoryRepository;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        return $this -> theRepository -> index();
    }

    /**
     * @param SubcategoryRequest $subcategoryRequest
     * @return mixed
     */
    public function store( SubcategoryRequest $subcategoryRequest )
    {
        return $this -> theRepository -> store( $subcategoryRequest );
    }

    /**
     * @param Subcategory $subcategory
     * @return mixed
     */
    public function show( Subcategory $subcategory )
    {
        return $this -> theRepository -> show( $subcategory );
    }

    /**
     * @param SubcategoryRequest $subcategoryRequest
     * @param Subcategory $subcategory
     * @return mixed
     */
    public function update( SubcategoryRequest $subcategoryRequest, Subcategory $subcategory )
    {
        return $this -> theRepository -> update( $subcategoryRequest, $subcategory );
    }

    /**
     * @param Subcategory $subcategory
     * @return mixed
     */
    public function destroy( Subcategory $subcategory )
    {
        return $this -> theRepository -> destroy( $subcategory );
    }
}
