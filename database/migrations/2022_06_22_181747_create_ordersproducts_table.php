<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordersproducts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->BigInteger('product_id');
            $table->BigInteger('order_id');
            $table->integer('quantity');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordersproducts');
    }
};
