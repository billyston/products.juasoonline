<?php

namespace App\Http\Controllers\Business\Juaso\Group;

use App\Repositories\Business\Juaso\Group\JuasoGroupRepositoryInterface;
use App\Models\Juaso\Group\Group;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class JuasoGroupController extends Controller
{
    private JuasoGroupRepositoryInterface $theRepository;

    /**
     * JuasoGroupController constructor.
     * @param JuasoGroupRepositoryInterface $juasoGroupRepository
     */
    public function __construct( JuasoGroupRepositoryInterface $juasoGroupRepository )
    {
        $this -> theRepository = $juasoGroupRepository;
    }

    /**
     * @return JsonResponse
     */
    public function index() : JsonResponse
    {
        return $this -> theRepository -> index();
    }

    /**
     * @param Group $group
     * @return JsonResponse
     */
    public function show( Group $group ) : JsonResponse
    {
        return $this -> theRepository -> show( $group );
    }
}
