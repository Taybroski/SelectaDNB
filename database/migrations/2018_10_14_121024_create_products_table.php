<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('title');
            $table->string('tec_title')->nullable();
            $table->string('size');
            $table->string('colour');
            $table->string('supplier')->nullable();
            $table->string('mpn')->nullable();
            $table->string('cover_image')->nullable();
            $table->text('description')->nullable();
            $table->bigInteger('barcode')->nullable();
            $table->integer('qoh')->default(0);
            $table->float('trade')->nullable();
            $table->float('price');
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
        Schema::dropIfExists('products');
    }
}
