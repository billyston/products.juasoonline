<?php

namespace App\Repositories\File;

use App\Http\Requests\File\FileRequest;
use Illuminate\Http\JsonResponse;

interface FileRepositoryInterface
{
    /**
     * @return JsonResponse
     */
    public function index();

    /**
     * @param FileRequest $fileRequest
     * @return JsonResponse
     */
    public function store( FileRequest $fileRequest );
}
