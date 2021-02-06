<?php

namespace App\Jobs\File;

use App\Http\Requests\File\FileRequest;
use App\Http\Resources\File\FileResource;
use App\Models\File\File;
use App\Traits\apiResponseBuilder;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class StoreFile implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    use apiResponseBuilder; private $theRequest;

    /**
     * StoreFile constructor.
     * @param FileRequest $fileRequest
     */
    public function __construct( FileRequest $fileRequest )
    {
        $this -> theRequest = $fileRequest;
    }

    /**
     * @return FileResource
     */
    public function handle()
    {
        if( !$this -> theRequest -> hasFile( $this -> theRequest -> input( 'data.attributes.path[]' ) ) )
        {
            return response()->json(['upload_file_not_found'], 400);
        }
    }
}
