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
            $table->integer('id_Orders');
            $table->integer('id_Prod_Orders')->unsigned();
            $table->foreign('id_Prod_Orders')->references('id_Prod')->on('products');
            $table->string('comments_Orders');
            $table->integer('quantity_Orders');

            $table->string('name_Bakings_Orders')->unique();
            $table->foreign('name_Bakings_Orders')->references('name_Bakings')->on('bakings')->onUpdate('cascade')
                ->onDelete('cascade');

            $table->integer('id_ExtrasLists_Orders')->unsigned();
            $table->foreign('id_ExtrasLists_Orders')->references('id_Extras')->on('extras_lists');

            $table->string('name_Presta_Orders')->unique();
            $table->foreign('name_Presta_Orders')->references('name_Presta')->on('prestations')->onUpdate('cascade')
                ->onDelete('cascade');

            $table->float('total_price_Orders');

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
