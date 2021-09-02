<?php

namespace App\Repositories\Juasoonline\Juaso\Group;

use App\Models\Juaso\Group\Group;
use Illuminate\Http\JsonResponse;

interface JuasoonlineGroupRepositoryInterface
{
    /**
     * @return JsonResponse
     */
    public function getGroups() : JsonResponse;

    /**
     * @param Group $group
     * @return JsonResponse
     */
    public function getGroup( Group $group ) : JsonResponse;
}
