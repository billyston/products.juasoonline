<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_store', function ( Blueprint $table )
        {
            $table -> id();

            $table -> unsignedBigInteger( 'customer_id' ) -> index();
            $table -> unsignedBigInteger( 'store_id' ) -> index();

            $table -> timestamps();

            $table -> foreign('customer_id' ) -> references( 'id' ) -> on( 'customers' ) -> onDelete( 'cascade' );
            $table -> foreign('store_id' ) -> references( 'id' ) -> on( 'stores' ) -> onDelete( 'cascade' );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_store');
    }
}
