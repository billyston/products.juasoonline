<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'stores', function ( Blueprint $table )
        {
            $table -> bigIncrements('id' );
            $table -> uuid( 'resource_id' ) -> unique() -> nullable( false );
            $table -> unsignedBigInteger( 'country_id' ) -> nullable( false );

            $table -> string( 'name' ) -> nullable( false ) -> unique();
            $table -> string( 'doing_business_as' ) -> nullable( false ) -> unique();

            $table -> string( 'region' );
            $table -> string( 'city' );
            $table -> string( 'address' );
            $table -> string( 'postal_code' );

            $table -> string( 'mobile_phone' ) -> nullable( false ) -> unique();
            $table -> string( 'other_phone' );

            $table -> string( 'email' ) -> nullable( false ) -> unique();
            $table -> string( 'website' );

            $table -> timestamps();
            $table -> softDeletes();

            $table -> foreign('country_id' ) -> references('id' ) -> on( 'countries' ) -> onDelete( 'cascade' );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
