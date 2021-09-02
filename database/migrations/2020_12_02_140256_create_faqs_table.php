<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faqs', function ( Blueprint $table )
        {
            $table -> bigIncrements('id' );
            $table -> uuid( 'resource_id' ) -> unique() -> nullable( false );

            $table -> unsignedBigInteger( 'product_id' );
            $table -> unsignedBigInteger( 'customer_id' ) -> nullable( true );

            $table -> mediumText( 'question' ) -> nullable( false );
            $table -> mediumText( 'answer' ) -> nullable( true );

            $table -> timestamps();

            $table -> foreign('product_id' ) -> references('id' ) -> on ('products' ) -> onDelete('cascade' );
            $table -> foreign('customer_id' ) -> references('id' ) -> on ('customers' ) -> onDelete('cascade' );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faqs');
    }
}
