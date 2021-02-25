<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_images', function ( Blueprint $table )
        {
            $table -> bigIncrements('id' );
            $table -> uuid( 'resource_id' ) -> unique() -> nullable( false );

            $table -> unsignedBigInteger( 'product_id' );

            $table -> mediumText( 'description' );
            $table -> string( 'file' ) -> nullable( false );

            $table -> timestamps();

            $table -> softDeletes();

            $table -> foreign('product_id' ) -> references('id' ) -> on ('products' ) -> onDelete('cascade' );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_images');
    }
}
