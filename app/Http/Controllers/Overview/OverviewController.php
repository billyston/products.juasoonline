<?php

namespace App\Http\Controllers\Overview;

use App\Http\Controllers\Controller;
use App\Http\Requests\Overview\OverviewRequest;
use App\Models\Overview\Overview;
use App\Repositories\Overview\OverviewRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OverviewController extends Controller
{
    private $theRepository;

    /**
     * OverviewController constructor.
     * @param OverviewRepositoryInterface $overviewRepository
     */
    public function __construct( OverviewRepositoryInterface $overviewRepository )
    {
        $this -> theRepository = $overviewRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index() : JsonResponse
    {
        return $this -> theRepository -> index();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param OverviewRequest $overviewRequest
     * @return JsonResponse
     */
    public function store( OverviewRequest $overviewRequest ) : JsonResponse
    {
        return $this -> theRepository -> store( $overviewRequest );
    }

    /**
     * Display the specified resource.
     *
     * @param Overview $overview
     * @return JsonResponse
     */
    public function show( Overview $overview ) : JsonResponse
    {
        return $this -> theRepository -> show( $overview );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param OverviewRequest $overviewRequest
     * @param Overview $overview
     * @return JsonResponse
     */
    public function update( OverviewRequest $overviewRequest, Overview $overview ) : JsonResponse
    {
        return $this -> theRepository -> update( $overviewRequest, $overview );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Overview $overview
     * @return JsonResponse
     */
    public function destroy( Overview $overview ) : JsonResponse
    {
        return $this -> theRepository -> destroy( $overview );
    }
}
