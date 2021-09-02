<?php

namespace App\Repositories\Business\Juaso\Group;

use App\Models\Juaso\Group\Group;
use Illuminate\Http\JsonResponse;

interface JuasoGroupRepositoryInterface
{
    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse;

    /**
     * @param Group $group
     * @return JsonResponse
     */
    public function show( Group $group ) : JsonResponse;
}
