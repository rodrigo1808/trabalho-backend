<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero');
            $table->string('data');
            $table->integer('quantidade');
            $table->integer('cliente_id')->unsigned()->nullable();
            $table->integer('produto_id')->unsigned()->nullable();
            

            $table->timestamps();
        });
        Schema::table('orders', function (Blueprint $table){ 
            $table->foreign('cliente_id')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('produto_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
