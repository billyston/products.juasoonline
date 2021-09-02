<?php
    use Illuminate\Support\Facades\DB;
    use Symfony\Component\HttpFoundation\Response;

    /**
     * @return array|mixed
     */
    function includeResources() : array
    {
        return ( request() -> get( 'include' ) ) ? explode( ',', request() -> get( 'include' ) ) : [];
    }

    /**
     * @param bool $is_related
     * @return void
     */
    function checkResourceRelation( bool $is_related )
    {
        abort_unless( $is_related, response() -> json([ 'status' => 'Error', 'code' => Response::HTTP_CONFLICT, 'message' => 'The resource you are trying to access does not belong to this category', 'data' => null ]));
    }

    /**
     * Generate unique ID
     * @param int $length
     * @return string
     */
    function generateProductID( int $length ) : string
    {
        $number = '';
        do { for ( $i = $length; $i --; $i > 0 ) { $number .= mt_rand(0,9); } }
        while ( !empty( DB::table( 'products' ) -> where( 'resource_id', $number ) -> first([ 'resource_id' ])) );

        return $number;
    }

    /**
     * Generate unique ID
     * @param $star_5
     * @param $star_4
     * @param $star_3
     * @param $star_2
     * @param $star_1
     * @return array
     */
    function getRating( $star_5, $star_4, $star_3, $star_2, $star_1 ) : array
    {
        $total_ratings = $star_5 + $star_4 + $star_3 + $star_2 + $star_1;
        $ratings = array();

        if ( $star_5 !== 0 || $star_4 !== 0 || $star_3 !== 0 || $star_2 !== 0 || $star_1 !== 0 ) {
            array_push($ratings, array('average_rating' => calculateAverage($star_5, $star_4, $star_3, $star_2, $star_1), 'total_rating' => $total_ratings));
            array_push($ratings, array('rating' => array('star_5' => $star_5, 'star_4' => $star_4, 'star_3' => $star_3, 'star_2' => $star_2, 'star_1' => $star_1)));
            array_push($ratings, array('rating_percentage' => array('star_5' => round(100 * $star_5 / $total_ratings, 2) . "%", 'star_4' => round(100 * $star_4 / $total_ratings, 2) . "%", 'star_3' => round(100 * $star_3 / $total_ratings, 2) . "%", 'star_2' => round(100 * $star_2 / $total_ratings, 2) . "%", 'star_1' => round(100 * $star_1 / $total_ratings, 2) . "%")));
        }
        return $ratings;
    }

    /**
     * Generate unique ID
     * @param $star_5
     * @param $star_4
     * @param $star_3
     * @param $star_2
     * @param $star_1
     * @return float
     */
    function calculateAverage( $star_5, $star_4, $star_3, $star_2, $star_1 ) : float
    {
        return 5 * $star_5 + 4 * $star_4 + 3 * $star_3 + 2 * $star_4 + 1 * $star_1 === 0 ? 0 : round((5 * $star_5 + 4 * $star_4 + 3 * $star_3 + 2 * $star_2 + 1 * $star_1) / ($star_5 + $star_4 + $star_3 + $star_2 + $star_1), 2);
    }
