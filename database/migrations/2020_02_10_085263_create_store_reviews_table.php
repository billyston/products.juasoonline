<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_reviews', function ( Blueprint $table )
        {
            $table -> bigIncrements('id' );
            $table -> uuid( 'resource_id' ) -> unique() -> nullable( false );
            $table -> unsignedBigInteger( 'customer_id' );
            $table -> unsignedBigInteger( 'store_id' );

            $table -> tinyInteger( 'product_description' ) ->default( 0 );
            $table -> tinyInteger( 'communication' ) ->default( 0 );
            $table -> mediumText( 'comment' ) -> nullable( false );

            $table -> string( 'status' ) ->default( '000' );

            $table -> timestamps();

            $table -> foreign('customer_id' ) -> references('id' ) -> on( 'customers' ) -> onDelete( 'cascade' );
            $table -> foreign('store_id' ) -> references('id' ) -> on( 'stores' ) -> onDelete( 'cascade' );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_reviews');
    }
}
