<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderitems', function (Blueprint $table) {
          $table->id();
          $table->integer('user_id');
          $table->integer('order_id');
          $table->integer('product_id');
          $table->integer('price');
          $table->integer('quantity');
          $table->float('amount');
          $table->float('total');
          $table->string('note',150)->nullable();
          $table->string('status',30)->default('New');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderitems');
    }
}
