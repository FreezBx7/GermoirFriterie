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

            $table->string('name_Prod', 50);

            $table->float('price_Prod');

            $table->string('size_Prod', 50);
            $table->foreign('size_Prod')->references('name_Sizes')->on('sizes')->onUpdate('cascade')
                ->onDelete('cascade');

            $table->string('cat_Prod', 50);
            $table->foreign('cat_Prod')->references('name_Cat')->on('categories')->onUpdate('cascade')
                ->onDelete('cascade');
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
