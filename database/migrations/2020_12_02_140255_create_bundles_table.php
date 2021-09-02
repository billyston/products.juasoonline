<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBundlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bundles', function ( Blueprint $table )
        {
            $table -> bigIncrements('id' );
            $table -> uuid( 'resource_id' ) -> unique() -> nullable( false );
            $table -> unsignedBigInteger( 'product_id' );

            $table -> string( 'bundle' );
            $table -> string( 'image' ) -> nullable( true );
            $table -> string( 'description' ) -> nullable( true );

            $table -> integer( 'quantity' ) -> nullable( true ) ->default( 0 );
            $table -> integer( 'total_sold' ) -> nullable( true ) ->default( 0 );
            $table -> float( 'price' ) ->default( 0.00 );
            $table -> float( 'sales_price' ) ->default( 0.00 );

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
        Schema::dropIfExists('bundles');
    }
}
