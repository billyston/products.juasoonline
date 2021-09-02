<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_subcategories', function ( Blueprint $table )
        {
            $table -> bigIncrements('id' );
            $table -> uuid( 'resource_id' ) -> unique() -> nullable( false );
            $table -> unsignedBigInteger( 'store_category_id' );

            $table -> string( 'name' ) -> nullable( false );
            $table -> string( 'slug' ) -> nullable( false );
            $table -> mediumText( 'description' ) -> nullable( false );

            $table -> timestamps();

            $table -> foreign('store_category_id' ) -> references('id' ) -> on ('store_categories' ) -> onDelete('cascade' );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_subcategories');
    }
}
