<?php

namespace App\Repositories\Juasoonline;

use App\Http\Resources\Juasoonline\PromotionResource;
use App\Http\Resources\Juasoonline\SliderResource;
use App\Http\Resources\Others\Group\GroupResource;
use App\Http\Resources\Product\ProductResource;
use App\Models\Others\Group\Group;
use App\Models\Product\Product;
use App\Models\Product\Promotion\Promotion;
use App\Models\Store\Store;
use App\Traits\apiResponseBuilder;
use App\Traits\Relatives;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class JuasoonlineRepository implements JuasoonlineRepositoryInterface
{
    use apiResponseBuilder, Relatives;

    /**
     * @return AnonymousResourceCollection
     */
    public function products() : AnonymousResourceCollection
    {
        $Product = Product::query() -> when( $this -> loadRelationships(), function ( Builder $builder ) { return $builder -> with ( $this -> relationships ); }) -> paginate('10');
        return ProductResource::collection( $Product );
    }

    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function product( Product $product ) : JsonResponse
    {
        if ( $this -> loadRelationships() ) { $product -> load( $this -> relationships ); }
        return $this -> successResponse( new ProductResource( $product ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function recommendations( Request $request ) : JsonResponse
    {
        $product = Product::query();
        if ( request('name')) { $product -> where('name', 'Like', '%' . request('name' ) . '%'); }
        return $this -> successResponse( ProductResource::collection( $product -> orderBy('id', 'DESC' ) -> paginate(500) ), "Success", null, Response::HTTP_OK );

//        $products = Product::where([
//            [ 'name', '!=', Null ],
//            [ function ( $query ) use ($request)
//            {
//                if (( $item = $request -> name ))
//                {
//                    $query -> orWhere( 'name', 'LIKE', '%' . $item . '%' ) -> get();
//                }
//            } ]
//        ])->orderBy('id', 'desc') -> paginate( 500 );
//        return $this -> successResponse( ProductResource::collection( $products ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @param Store $store
     * @return JsonResponse
     */
    public function storeProducts( Store $store ) : JsonResponse
    {
        return $this -> successResponse( ProductResource::collection( $store -> products() -> paginate() ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @return JsonResponse
     */
    public function deals() : JsonResponse
    {
        $deals = Promotion::where('promo_type_id', '=', 3) -> where('status', '=', 1) -> get();
        return $this -> successResponse( PromotionResource::collection( $deals ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @return JsonResponse
     */
    public function storeAds() : JsonResponse
    {
        $deals = Promotion::where('promo_type_id', '=', 2) -> where('status', '=', 1) -> get();
        return $this -> successResponse( SliderResource::collection( $deals ), "Success", null, Response::HTTP_OK );
    }

    /**
     * @return JsonResponse
     */
    public function categories() : JsonResponse
    {
        $Group = Group::query() -> when( $this -> loadRelationships(), function ( Builder $builder ) { return $builder -> with ( $this -> relationships ); } ) -> paginate( 20 );
        return $this -> successResponse( GroupResource::collection( $Group ), "Success", null, Response::HTTP_OK );
    }
}
