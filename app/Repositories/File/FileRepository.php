<?php

namespace App\Repositories\File;

use App\Http\Requests\File\FileRequest;
use App\Http\Resources\File\FileResource;
use App\Jobs\File\CreateFile;
use App\Models\File\File;
use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class FileRepository implements FileRepositoryInterface
{
    use apiResponseBuilder; use Relatives;

    /**
     * @return JsonResponse
     */
    public function index()
    {
        $File = File::query() -> when( $this -> loadRelationships(), function ( Builder $builder ) { return $builder -> with ( $this -> relationships ); } ) -> paginate( 20 );
        return $this -> successResponse( FileResource::collection( $File ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param FileRequest $fileRequest
     * @return JsonResponse
     */
    public function store( FileRequest $fileRequest )
    {
        return $this -> successResponse( ( new CreateFile( $fileRequest ) ) -> handle(), "Success", "Product created successfully", Response::HTTP_CREATED );
    }
}
