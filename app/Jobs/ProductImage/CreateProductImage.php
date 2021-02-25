<?php

namespace App\Jobs\ProductImage;

use App\Http\Requests\ProductImage\ProductImageRequest;
use App\Models\ProductImage\ProductImage;
use App\Traits\apiResponseBuilder;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class CreateProductImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    use apiResponseBuilder; private $theRequest;

    /**
     * CreateProduct constructor.
     * @param ProductImageRequest $productImageRequest
     */
    public function __construct( ProductImageRequest $productImageRequest )
    {
        return $this -> theRequest = $productImageRequest;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try
        {
            foreach ( array_combine( $this -> theRequest[ 'description' ], $this -> theRequest[ 'file' ] ) as $description => $file  )
            {
                $filePath = $file -> store( 'products/images' );
                $productData = array( 'product_id' => $this -> theRequest[ 'product_id' ], 'description' => $description, 'file' => $filePath );
                ProductImage::create( $productData );
            }

//            foreach ( $this -> theRequest[ 'file' ] as $file )
//            {
//                $filePath = $file -> store( 'products/images' );
//                $productData = array( 'product_id' => $this -> theRequest[ 'product_id' ], 'description' => "kfahjhfjhatga", 'file' => $filePath );
//                ProductImage::create( $productData );
//            }
        }

        catch ( Exception $exception )
        {
            report( $exception );
            return abort(500, 'something went wrong, please try again later');
        }
    }
}
