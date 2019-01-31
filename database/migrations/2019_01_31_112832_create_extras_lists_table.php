<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtrasListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extras_lists', function (Blueprint $table) {
            $table->integer('id_ExtrasLists');
            $table->integer('id_Extras')->unsigned();
            $table->foreign('id_Extras')->references('id_Extras')->on('extras');
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
        Schema::dropIfExists('extras_lists');
    }
}
