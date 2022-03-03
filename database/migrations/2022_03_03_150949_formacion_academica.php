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
            $table->string('unidad_educativa');
            $table->date('fecha_inicio_unidad_educativa');
            $table->date('fecha_fin_unidad_educativa');
            $table->string('superior');
            $table->date('fecha_inicio_superior');
            $table->date('fecha_fin_superior');
            $table->string('cursos');
            $table->date('fecha_inicio_cursos');
            $table->date('fecha_fin_cursos');
            $table->string('talleres');
            $table->date('fecha_inicio_talleres');
            $table->date('fecha_fin_talleres');
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
