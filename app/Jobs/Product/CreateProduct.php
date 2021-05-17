<?php

namespace App\Jobs\Product;

use App\Http\Requests\Product\ProductRequest;
use App\Http\Resources\Product\ProductResource;
use App\Models\Product\Color\Color;
use App\Models\Product\Image\Image;
use App\Models\Product\Overview\Overview;
use App\Models\Product\Product;
use App\Models\Product\Size\Size;
use App\Models\Product\Specification\Specification;
use App\Traits\apiResponseBuilder;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Response;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class CreateProduct implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    use apiResponseBuilder; private ProductRequest $theRequest;

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
            $Product -> store() -> associate($this -> theRequest ['data.relationships.store.store_id']);
            $Product -> brand() -> associate( $this -> theRequest [ 'data.relationships.brand.brand_id' ] );

            // Product associate with brand coming soon

            $Product -> save();

            // Attach related products
            $this -> attachCategories( $Product, $this -> getAttributes()['relationships']['categories'] );
            $this -> createSpecifications( $Product, $this -> theRequest ['data.relationships.specifications'] );
            $this -> createImages( $Product, $this -> theRequest ['data.relationships.images'] );
            $this -> createOverviews( $Product, $this -> theRequest ['data.relationships.overviews'] );
            $this -> createColors( $Product, $this -> theRequest ['data.relationships.colors'] );
            $this -> createSizes( $Product, $this -> theRequest ['data.relationships.sizes'] );

            return ( new ProductResource( $Product ) );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort($this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ));
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
            $product -> categories() -> attach( $subcategory[ 'category_id' ] );
        }
    }

    /**
     * @param Product $product
     * @param array $specifications
     */
    private function createSpecifications( Product $product, array $specifications ) : void
    {
        foreach ( $specifications [ 'data' ] as $specification )
        {
            $specification = new Specification( $specification );
            $specification -> product() -> associate( $product );
            $specification -> save();
        }
    }

    /**
     * @param Product $product
     * @param array $images
     */
    private function createImages( Product $product, array $images ) : void
    {
        foreach ( $images[ 'data' ] as $image )
        {
            $image = new Image( $image );
            $image -> product() -> associate( $product );
            $image -> save();
        }
    }

    /**
     * @param Product $product
     * @param array $overviews
     */
    private function createOverviews( Product $product, array $overviews ) : void
    {
        foreach ( $overviews[ 'data' ] as $overview )
        {
            $overview = new Overview( $overview );
            $overview -> product() -> associate( $product );
            $overview -> save();
        }
    }

    /**
     * @param Product $product
     * @param array $colors
     */
    private function createColors( Product $product, array $colors ) : void
    {
        foreach ( $colors[ 'data' ] as $color )
        {
            $color = new Color( $color );
            $color -> product() -> associate( $product );
            $color -> save();
        }
    }

    /**
     * @param Product $product
     * @param array $sizes
     */
    private function createSizes( Product $product, array $sizes ) : void
    {
        foreach ( $sizes[ 'data' ] as $size )
        {
            $size = new Size( $size );
            $size -> product() -> associate( $product );
            $size -> save();
        }
    }
}
