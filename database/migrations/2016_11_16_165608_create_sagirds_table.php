<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSagirdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sagirds', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('surname');
            $table->text('address');
            $table->text('avatar');
            $table->text('password');
            $table->text('email');
            $table->integer('age');
            $table->text('sinif_id');
            $table->text('ata_adi');
            $table->text('city');
            $table->text('passport_no');
            $table->integer('phone');
            $table->text('code');
            $table->integer('qayib');
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
        Schema::dropIfExists('sagirds');
    }
}
