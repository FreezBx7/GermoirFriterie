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
            $table->integer('id');
            $table->string('name');
            $table->string('comments', 50);
            $table->integer('quantity');

            $table->string('nameBakings', 50);
            $table->foreign('nameBakings')->references('name')->on('bakings')->onUpdate('cascade')
                ->onDelete('cascade');


            $table->string('namePresta', 50);
            $table->foreign('namePresta')->references('name')->on('prestations')->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('extras');

            $table->float('totalPrice');

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
        Schema::dropIfExists('orders');
    }
}
