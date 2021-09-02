<?php

namespace App\Jobs\Business\Resource\Product\Product;

use App\Http\Requests\Business\Resource\Product\Product\ProductRequest;
use App\Http\Resources\Business\Resource\Product\Product\ProductResource;
use App\Models\Business\Product\Bundle\Bundle;
use App\Models\Juaso\Brand\Brand;
use App\Models\Juaso\Tag\Tag;
use App\Models\Business\Product\Color\Color;
use App\Models\Business\Product\Image\Image;
use App\Models\Business\Product\Overview\Overview;
use App\Models\Business\Product\Product\Product;
use App\Models\Business\Product\Size\Size;
use App\Models\Business\Product\Specification\Specification;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Symfony\Component\HttpFoundation\Response;
use Exception;

class CreateProduct implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private ProductRequest $theRequest;

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
            $Product -> store() -> associate( $this -> theRequest ['data.relationships.store.store_id'] );
            $Product -> charge() -> associate( $this -> theRequest ['data.relationships.charge.charge_id'] );

            $Brand = Brand::firstOrCreate([ 'name' => $this -> theRequest -> input( 'data.relationships.brand.name' ) ]);
            $Product -> brand() -> associate( $Brand );

            $Product -> save();

            // Attach related products
            $this -> attachCategories( $Product, $this -> getAttributes()['relationships']['categories'] );
            $this -> attachStoreCategories( $Product, $this -> getAttributes()['relationships']['store_categories'] );
            $this -> attachTags( $Product, $this -> getAttributes()['relationships']['tags'] );
            $this -> createSpecifications( $Product, $this -> theRequest ['data.relationships.specifications'] );
            $this -> createImages( $Product, $this -> theRequest ['data.relationships.images'] );

            if ( isset( $this -> theRequest ['data.relationships.overviews']) ){ $this -> createOverviews( $Product, $this -> theRequest ['data.relationships.overviews'] ); }
            if ( isset( $this -> theRequest ['data.relationships.colors']) ){ $this -> createColors( $Product, $this -> theRequest ['data.relationships.colors'] ); }
            if ( isset( $this -> theRequest ['data.relationships.sizes']) ){ $this -> createSizes( $Product, $this -> theRequest ['data.relationships.sizes'] ); }
            if ( isset( $this -> theRequest ['data.relationships.bundles']) ){ $this -> createBundle( $Product, $this -> theRequest ['data.relationships.bundles'] ); }

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
    private function attachStoreCategories( Product $product, array $subcategories ) : void
    {
        foreach ( $subcategories[ 'data' ] as $subcategory )
        {
            $product -> store_categories() -> attach( $subcategory[ 'category_id' ] );
        }
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
     * @param array $tags
     */
    private function attachTags( Product $product, array $tags ) : void
    {
        foreach ( $tags[ 'data' ] as $tag )
        {
            $tag = Tag::firstOrCreate([ 'name' => $tag['name'] ]);
            $product -> tags() -> attach( $tag );
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

    /**
     * @param Product $product
     * @param array $bundles
     */
    private function createBundle( Product $product, array $bundles ) : void
    {
        foreach ( $bundles[ 'data' ] as $bundle )
        {
            $bundle = new Bundle( $bundle );
            $bundle -> product() -> associate( $product );
            $bundle -> save();
        }
    }
}
