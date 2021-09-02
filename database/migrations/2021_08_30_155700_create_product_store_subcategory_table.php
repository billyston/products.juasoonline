<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductStoreSubcategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_store_subcategory', function ( Blueprint $table )
        {
            $table -> id();

            $table -> unsignedBigInteger( 'product_id' ) -> index();
            $table -> unsignedBigInteger( 'store_subcategory_id' ) -> index();

            $table -> timestamps();

            $table -> foreign( 'product_id' ) -> references( 'id' ) -> on( 'products' ) -> onDelete( 'cascade' );
            $table -> foreign('store_subcategory_id' ) -> references( 'id' ) -> on( 'store_subcategories' ) -> onDelete( 'cascade' );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_store_subcategory');
    }
}
