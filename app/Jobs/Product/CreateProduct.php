<?php

namespace App\Jobs\Product;

use App\Http\Requests\Product\ProductRequest;
use App\Http\Resources\Product\ProductResource;
use App\Models\Product\Product;
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
            $Product -> store() -> associate( $this -> theRequest [ 'data.relationships.store.store_id' ] );
            $Product -> brand() -> associate( $this -> theRequest [ 'data.relationships.brand.brand_id' ] );

            // Product associate with brand coming soon

            $Product -> save();

            // Attach the categories
            $this -> attachCategories( $Product, $this -> getAttributes()[ 'relationships' ][ 'categories' ] );

            return ( new ProductResource( $Product ) );
        }

        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
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
}
