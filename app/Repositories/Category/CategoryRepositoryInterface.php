<?php

namespace App\Repositories\Category;

use App\Http\Requests\Category\CategoryRequest;
use App\Models\Category\Category;

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
