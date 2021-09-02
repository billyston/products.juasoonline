<?php

namespace App\Http\Controllers\Juasoonline\Juaso\Group;

use App\Models\Juaso\Group\Group;
use App\Repositories\Juasoonline\Juaso\Group\JuasoonlineGroupRepositoryInterface;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class JuasoonlineGroupController extends Controller
{
    private JuasoonlineGroupRepositoryInterface $theRepository;

    /**
     * JuasoonlineCategoryController constructor.
     * @param JuasoonlineGroupRepositoryInterface $juasoonlineGroupRepository
     */
    public function __construct( JuasoonlineGroupRepositoryInterface $juasoonlineGroupRepository )
    {
        $this -> theRepository = $juasoonlineGroupRepository;
    }

    /**
     * @return JsonResponse
     */
    public function getGroups() : JsonResponse
    {
        return $this -> theRepository -> getGroups();
    }

    /**
     * @param Group $group
     * @return JsonResponse
     */
    public function getGroup( Group $group ) : JsonResponse
    {
        return $this -> theRepository -> getGroup( $group );
    }
}
