<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMuellimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('muellims', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('surname');
            $table->text('email');
            $table->text('password');
            $table->text('fenn');
            $table->text('avatar');
            $table->integer('phone');
            $table->integer('filial_id');
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
        Schema::dropIfExists('muellims');
    }
}
