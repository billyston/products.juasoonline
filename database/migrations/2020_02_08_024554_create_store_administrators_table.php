<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreAdministratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'store_administrators', function ( Blueprint $table )
        {
            $table -> bigIncrements('id' );
            $table -> uuid( 'resource_id' ) -> unique() -> nullable( false );
            $table -> unsignedBigInteger( 'store_id' );

            $table -> string('first_name' ) -> nullable( false );
            $table -> string('other_names' ) -> nullable();
            $table -> string('last_name' ) -> nullable( false );

            $table -> string('designation', 30 ) -> nullable( false );

            $table -> string('email', 50 ) -> nullable( false ) -> unique();
            $table -> string('mobile_phone', 20 ) -> nullable( false ) -> unique();
            $table -> string('office_phone', 20 ) -> unique();

            $table -> timestamps();
            $table -> softDeletes();

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
        Schema::dropIfExists('store_administrators');
    }
}
