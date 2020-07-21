<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('categoryId');
            $table->string('name');
            $table->string('units')->nullable();
            $table->string('generalPrice');
            $table->string('ourPrice')->nullable();
            $table->string('variety')->nullable();
            $table->string('MRP')->nullable();
            $table->string('uniqueid',155)->unique();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('storableYN')->nullable();
            $table->string('storageDuration')->nullable();
            $table->string('storageType')->nullable();
            $table->string('precautions')->nullable();
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
        Schema::dropIfExists('items');
    }
}
