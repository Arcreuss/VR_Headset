<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVrHeadsetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vr_headset', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('name');
            $table->integer('price');
            $table->string('releasedate');
            $table->string('description');
            $table->string('resolution');
            $table->string('refreshrate');
            $table->string('fov');
            $table->string('connections');
            $table->string('sensors');
            $table->string('controllersensor');
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
        Schema::dropIfExists('vr_headset');
    }
}
