<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElaqesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elaqes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sender_id');
            $table->integer('reciever_id');
            $table->text('sender_type');
            $table->text('reciever_type');
            $table->text('title');
            $table->text('content');
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
        Schema::drop('elaqes');
    }
}
