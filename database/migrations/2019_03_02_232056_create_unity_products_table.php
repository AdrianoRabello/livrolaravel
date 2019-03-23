<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnityProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unity_products', function (Blueprint $table) {
            $table->increments('id');            
            $table->integer('amount')->nullable();
            $table->string('description',500)->nullable();
            $table->unsignedInteger('unity_id');
            $table->foreign('unity_id')->references('id')->on('unities')->onDelete('cascade');
            $table->unsignedInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unity_products');
    }
}
