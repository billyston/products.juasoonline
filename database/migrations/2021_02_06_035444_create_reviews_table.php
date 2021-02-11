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
            $table -> unsignedBigInteger( 'product_id' );
            $table -> unsignedBigInteger( 'customer_id' );

            $table -> tinyInteger( 'rating' )->default( 0 );
            $table -> mediumText( 'review' ) -> nullable( false );
            $table -> smallInteger( 'status' ) ->default( 1 );

            $table -> timestamps();
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
