<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImtahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imtahans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('muellim_id');
            $table->text('sinif_id');
            $table->text('melumat');
            $table->text('imtahan_tarixi');
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
        Schema::dropIfExists('imtahans');
    }
}
