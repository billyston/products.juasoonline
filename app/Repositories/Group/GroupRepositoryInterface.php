<?php

namespace App\Repositories\Group;

use App\Http\Requests\Category\CategoryRequest;
use App\Http\Requests\Group\GroupRequest;
use App\Models\Category\Category;
use App\Models\Group\Group;

interface GroupRepositoryInterface
{
    /**
     * @return mixed
     */
    public function index();

    /**
     * @param GroupRequest $groupRequest
     * @return mixed
     */
    public function store ( GroupRequest $groupRequest );

    /**
     * @param Group $group
     * @return mixed
     */
    public function show( Group $group );

    /**
     * @param GroupRequest $groupRequest
     * @param Group $group
     * @return mixed
     */
    public function update( GroupRequest $groupRequest, Group $group );

    /**
     * @param Group $group
     * @return mixed
     */
    public function destroy( Group $group );
}
