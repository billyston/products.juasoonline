<?php

namespace App\Http\Controllers\Others\Brand;

use App\Http\Controllers\Controller;
use App\Http\Requests\Others\Brand\BrandRequest;
use App\Repositories\Others\Brand\BrandRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    private BrandRepositoryInterface $theRepository;

    /**
     * CategoryController constructor.
     * @param BrandRepositoryInterface $brandRepository
     */
    public function __construct( BrandRepositoryInterface $brandRepository )
    {
        $this -> theRepository = $brandRepository;
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
     * @param BrandRequest $brandRequest
     * @return JsonResponse
     */
    public function store( BrandRequest $brandRequest ) : JsonResponse
    {
        return $this -> theRepository -> store( $brandRequest );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
