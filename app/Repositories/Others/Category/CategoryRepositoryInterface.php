<?php

namespace App\Repositories\Others\Category;

use App\Http\Requests\Others\Category\CategoryRequest;
use App\Models\Others\Category\Category;

interface CategoryRepositoryInterface
{
    /**
     * @return mixed
     */
    public function index();

    /**
     * @param CategoryRequest $categoryRequest
     * @return mixed
     */
    public function store (CategoryRequest $categoryRequest );

    /**
     * @param Category $category
     * @return mixed
     */
    public function show( Category $category );

    /**
     * @param CategoryRequest $categoryRequest
     * @param Category $category
     * @return mixed
     */
    public function update( CategoryRequest $categoryRequest, Category $category );

    /**
     * @param Category $category
     * @return mixed
     */
    public function destroy( Category $category );
}
