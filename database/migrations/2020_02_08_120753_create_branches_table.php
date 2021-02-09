<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'branches', function ( Blueprint $table )
        {
            $table -> bigIncrements('id' );
            $table -> uuid( 'resource_id' ) -> unique() -> nullable( false );
            $table -> unsignedBigInteger( 'store_id' );

            $table -> string( 'branch_name' ) -> nullable( false ) -> unique();

            $table -> string( 'region' );
            $table -> string( 'city' );
            $table -> string( 'address' );
            $table -> string( 'postal_code' );

            $table -> string( 'mobile_phone' ) -> nullable( false ) -> unique();
            $table -> string( 'other_phone' );

            $table -> string( 'email' ) -> unique();

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
        Schema::dropIfExists('branches');
    }
}
