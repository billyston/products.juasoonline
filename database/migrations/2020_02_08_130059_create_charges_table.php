<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charges', function ( Blueprint $table )
        {
            $table -> bigIncrements('id' );
            $table -> uuid( 'resource_id' ) -> unique() -> nullable( false );
            $table -> unsignedBigInteger( 'store_id' );

            $table -> string( 'name' ) -> nullable( false );
            $table -> float( 'fee' );
            $table -> mediumText( 'description' );

            $table -> timestamps();

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
        Schema::dropIfExists('charges');
    }
}
