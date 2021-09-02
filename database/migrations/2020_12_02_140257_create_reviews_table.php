<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'reviews', function ( Blueprint $table )
        {
            $table -> bigIncrements('id' );
            $table -> uuid( 'resource_id' ) -> unique() -> nullable( false );
            $table -> unsignedBigInteger( 'customer_id' );
            $table -> unsignedBigInteger( 'product_id' );

            $table -> tinyInteger( 'rating' ) ->default( 0 );
            $table -> mediumText( 'review' ) -> nullable( false );
            $table -> string( 'status' ) ->default( '000' );

            $table -> timestamps();

            $table -> foreign('customer_id' ) -> references('id' ) -> on( 'customers' ) -> onDelete( 'cascade' );
            $table -> foreign('product_id' ) -> references('id' ) -> on( 'products' ) -> onDelete( 'cascade' );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
