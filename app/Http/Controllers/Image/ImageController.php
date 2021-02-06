<?php

namespace App\Http\Controllers\Image;

use App\Http\Controllers\Controller;
use App\Models\File\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function store( Request $request )
    {

//        logger() -> debug( $request -> input( 'data.attributes' ) ); exit;

        foreach ( $request -> input( 'data.attributes' ) as $image )
        {
            logger() -> debug( $image['path'] );

            $path = $request -> file( $image['path'] ) -> store('products/images/');
            logger() -> debug( $path );
        }

//        $attributes = $request->input('data.attributes.path');
//        foreach ($request->input('data.attributes') as $image) {
//            logger()->debug(Storage::disk('local')->copy($image['path'], 'products/images/' . str_shuffle('siouaodifajosupoidupaio'). '.jpg'));
//        }
//        return 'done';


//        $paths = [];
//        foreach ($request->input('data.attributes') as $image) {
//            $path = 'products/images/' . str_shuffle('siouaodifajosupoidupaio'). '.jpg';
//            Storage::disk('local')->copy($image['path'], $path);
//            $paths[] = $path;
//        }
//        return $paths;
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
