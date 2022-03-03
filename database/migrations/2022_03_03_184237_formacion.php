<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('empre');
            $table->string('fecha_ingreso');
            $table->string('fecha_fin');
            $table->string('cargo');
            $table->string('telf');
            $table->string('empresa');
            $table->string('fech_ingreso');
            $table->string('fech_fin');
            $table->string('carg');
            $table->string('telfono');
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
        //
    }
};
