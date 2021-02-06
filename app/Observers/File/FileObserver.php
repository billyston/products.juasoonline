<?php

namespace App\Observers\File;

use App\Models\File\File;

class FileObserver
{
    /**
     * @param File $file
     */
    public function creating( File $file )
    {
        $file -> resource_id = uniqid();
    }
}
