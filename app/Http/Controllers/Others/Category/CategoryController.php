<?php

namespace App\Http\Controllers\Others\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Others\Category\CategoryRequest;
use App\Models\Others\Category\Category;
use App\Repositories\Others\Category\CategoryRepositoryInterface;

class CategoryController extends Controller
{
    private CategoryRepositoryInterface $theRepository;

    /**
     * CategoryController constructor.
     * @param CategoryRepositoryInterface $categoryRepository
     */
    public function __construct( CategoryRepositoryInterface $categoryRepository )
    {
        $this -> theRepository = $categoryRepository;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        return $this -> theRepository -> index();
    }

    /**
     * @param CategoryRequest $categoryRequest
     * @return mixed
     */
    public function store( CategoryRequest $categoryRequest )
    {
        return $this -> theRepository -> store( $categoryRequest );
    }

    /**
     * @param Category $category
     * @return mixed
     */
    public function show( Category $category )
    {
        return $this -> theRepository -> show( $category );
    }

    /**
     * @param CategoryRequest $categoryRequest
     * @param Category $category
     * @return mixed
     */
    public function update( CategoryRequest $categoryRequest, Category $category )
    {
        return $this -> theRepository -> update( $categoryRequest, $category );
    }

    /**
     * @param Category $category
     * @return mixed
     */
    public function destroy( Category $category )
    {
        return $this -> theRepository -> destroy( $category );
    }
}
