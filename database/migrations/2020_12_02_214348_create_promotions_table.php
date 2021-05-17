<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotions', function ( Blueprint $table )
        {
            $table -> bigIncrements('id' );
            $table -> uuid( 'resource_id' ) -> unique() -> nullable( false );
            $table -> unsignedBigInteger( 'promo_type_id' );
            $table -> unsignedBigInteger( 'product_id' );

            $table -> dateTime( 'promo_start' ) -> nullable( true );
            $table -> dateTime( 'promo_end' ) -> nullable( true );

            $table -> smallInteger( 'status' );

            $table -> timestamps();

            $table -> foreign('promo_type_id' ) -> references('id' ) -> on( 'promo_types' ) -> onDelete( 'cascade' );
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
        Schema::dropIfExists('promotions');
    }
}
