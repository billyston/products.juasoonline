<?php

namespace App\Jobs\Product;

use App\Http\Requests\Product\ProductRequest;
use App\Http\Resources\Product\ProductResource;
use App\Models\Product\Product;
use App\Traits\apiResponseBuilder;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\File;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Exception;


class StoreProduct implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    use apiResponseBuilder; private $theRequest;

    /**
     * StoreProduct constructor.
     * @param ProductRequest $productRequest
     */
    public function __construct( ProductRequest $productRequest )
    {
        return $this -> theRequest = $productRequest;
    }

    /**
     * @return ProductResource|void
     */
    public function handle()
    {
        try
        {
            $Product = new Product( $this -> getAttributes()[ 'attributes' ] );
            $Product -> save();

            // Attach the categories
            $this -> attachCategories( $Product, $this -> getAttributes()[ 'relationships' ][ 'categories' ] );

            // Upload the images
//            $this -> uploadFiles( $Product, $this -> getAttributes()[ 'relationships' ][ 'files' ] );

            return ( new ProductResource( $Product ) );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort(500, 'something went wrong, please try again later');
        }
    }

    /**
     * @return array
     */
    private function getAttributes(): array
    {
        return $this -> theRequest -> validated()[ 'data' ];
    }

    /**
     * @param Product $product
     * @param array $subcategories
     */
    private function attachCategories( Product $product, array $subcategories ): void
    {
        foreach ( $subcategories[ 'data' ] as $subcategory )
        {
            $product -> subcategory() -> attach( $subcategory[ 'category_id' ] );
        }
    }

    public function uploadFiles( Product $product, array $Files ) : void
    {
        foreach ( $Files[ 'data' ] as $File )
        {
//            File::create([
//                'product_id'    => $product,
//                'title'         => $File['title' ],
//                'description'   => $File['title' ],
//                'path'          => Storage::put( 'public/storage/products', $File['file'] )
//            ]);

//            $File = $File[ 'file' ];
//            echo $File;
        }
        exit;
    }
}
