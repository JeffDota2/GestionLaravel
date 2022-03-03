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
        Schema::create('experiencias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_empresa');
            $table->string('fecha_inicio_empresa');
            $table->string('fecha_fin_empresa');
            $table->string('telefono');
            $table->string('cargo');


            $table->string('nombre_empresa2');
            $table->string('echa_inicio_empresa2');
            $table->string('fecha_fin_empresa2');
            $table->string('telefono2');
            $table->string('cargo2');


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
