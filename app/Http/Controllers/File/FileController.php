<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\Controller;
use App\Http\Requests\File\FileRequest;
use App\Repositories\File\FileRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FileController extends Controller
{
    private $theRepository;

    /**
     * CategoryController constructor.
     * @param FileRepositoryInterface $fileRepository
     */
    public function __construct( FileRepositoryInterface $fileRepository )
    {
        $this -> theRepository = $fileRepository;
    }

    /**
     * @return JsonResponse
     */
    public function index()
    {
        return $this -> theRepository -> index();
    }

    /**
     * @param FileRequest $fileRequest
     * @return JsonResponse
     */
    public function store( FileRequest $fileRequest )
    {
        return $this -> theRepository -> store( $fileRequest );
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
