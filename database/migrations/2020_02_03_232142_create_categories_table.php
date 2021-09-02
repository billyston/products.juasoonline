<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'categories', function ( Blueprint $table )
        {
            $table -> bigIncrements('id' );
            $table -> uuid( 'resource_id' ) -> unique() -> nullable( false );
            $table -> unsignedBigInteger( 'group_id' );

            $table -> string( 'name' ) -> nullable( false );
            $table -> string( 'slug' ) -> nullable( false );
            $table -> mediumText( 'description' ) -> nullable( false );

            $table -> timestamps();

            $table -> softDeletes();

            $table -> foreign('group_id' ) -> references('id' ) -> on ('groups' ) -> onDelete('cascade' );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists( 'categories' );
    }
}
