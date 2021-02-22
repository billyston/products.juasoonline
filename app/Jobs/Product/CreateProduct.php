<?php

namespace App\Jobs\Product;

use App\Http\Requests\Product\ProductRequest;
use App\Http\Resources\Product\ProductResource;
use App\Models\Overview\Overview;
use App\Models\File\File;
use App\Models\Product\Product;
use App\Models\Specification\Specification;
use App\Traits\apiResponseBuilder;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;


class CreateProduct implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    use apiResponseBuilder; private $theRequest;

    /**
     * CreateProduct constructor.
     * @param ProductRequest $productRequest
     */
    public function __construct( ProductRequest $productRequest )
    {
        return $this -> theRequest = $productRequest;
    }

    /**
     * @return ProductResource|void
     */
    public function handle() : ProductResource
    {
        try
        {
            $Product = new Product( $this -> getAttributes()[ 'attributes' ] );
            $Product -> store() -> associate( $this -> theRequest [ 'data.relationships.store.store_id' ] );

            // Product associate with brand coming soon

            $Product -> save();

            // Attach the categories
            $this -> attachCategories( $Product, $this -> getAttributes()[ 'relationships' ][ 'categories' ] );

            // Create the specifications
            $this -> createSpecifications( $Product, $this -> theRequest[ 'data.relationships.specifications' ] );

            // Create the overviews
            $this -> createOverviews( $Product, $this -> theRequest[ 'data.relationships.overviews' ] );

            // Upload the images
            $this -> createFiles( $Product, $this -> theRequest[ 'data.relationships.files' ] );

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
    private function getAttributes() : array
    {
        return $this -> theRequest -> validated()[ 'data' ];
    }

    /**
     * @param Product $product
     * @param array $subcategories
     */
    private function attachCategories( Product $product, array $subcategories ) : void
    {
        foreach ( $subcategories[ 'data' ] as $subcategory )
        {
            $product -> subcategories() -> attach( $subcategory[ 'category_id' ] );
        }
    }

    /**
     * @param Product $product
     * @param array $specifications
     */
    private function createSpecifications( Product $product, array $specifications )
    {
        foreach ( $specifications[ 'data' ] as $specification )
        {
            $Specification = new Specification( $specification );
            $Specification -> product() -> associate( $product );
            $Specification -> save();
        }
    }

    /**
     * @param Product $product
     * @param array $overviews
     */
    private function createOverviews( Product $product, array $overviews )
    {
        foreach ( $overviews[ 'data' ] as $overview )
        {
            $Overview = new Overview( $overview );
            $Overview -> product() -> associate( $product );
            $Overview -> save();
        }
    }

    public function createFiles( Product $product, array $files ) : void
    {
        logger( $files );
        foreach ( $files[ 'data' ] as $file )
        {
//            $File = $request -> path;
//            $filePath = $file -> store( 'products/images' );
//            $productData = array( 'product_id' => $request -> product_id, 'title' => $request -> title, 'description' => $request -> description, 'path' => $filePath );
//
//            File::create( $productData );



//            File::create([ 'product_id' => $product, 'title' => $File['title' ], 'description' => $File['title' ], 'path' => Storage::put( 'public/storage/products', $File['file'] ) ]);
//            $File = $File[ 'file' ];
//            echo $File;
        }
    }
}
