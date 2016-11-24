<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImtahanNeticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imtahan_netices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sagird_id');
            $table->integer('imtahan_id');
            $table->integer('imtahan_netice');
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
        Schema::dropIfExists('imtahan_netices');
    }
}
