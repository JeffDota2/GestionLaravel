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
        Schema::create('educaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('unidad_educativa');
            $table->string('fecha_inicio_unidad_educativa');
            $table->string('fecha_fin_unidad_educativa');
            $table->string('superior');
            $table->string('fecha_inicio_superior');
            $table->string('fecha_fin_superior');
            $table->string('cursos');
            $table->string('fecha_inicio_cursos');
            $table->string('fecha_fin_cursos');
            $table->string('talleres');
            $table->string('fecha_inicio_talleres');
            $table->string('fecha_fin_talleres');
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
