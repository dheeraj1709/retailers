<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->string('cartId',255);
            $table->string('itemName',50);
            $table->string('userId',255);
            $table->string('itemUniqueId',255);
            $table->decimal('quantity',5,3);
            $table->string('couponId',255)->nullable();
            $table->string('itemCategory',255)->nullable();
            $table->boolean('ordered')->nullable();
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
        Schema::dropIfExists('carts');
    }
}
