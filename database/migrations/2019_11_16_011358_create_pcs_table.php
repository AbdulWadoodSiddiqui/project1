<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pc_model');
            $table->string('pc_windows');
            $table->string('pc_generation');
            $table->string('pc_graphics');
            $table->string('pc_core');
            $table->string('pc_hard');
            $table->string('pc_optical');
            $table->string('pc_display');
            $table->string('pc_vr');
            $table->string('pc_led');
            $table->string('price');
            $table->mediumText('image');
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
        Schema::dropIfExists('pcs');
    }
}
