<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('docente');
            $table->string('nombre_curso');
            $table->integer('horas_curso');
            $table->date('fecha_limite');
            $table->string('materia');
            $table->string('vigencia');
            $table->string('videoconferencia');
            $table->string('drive');
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
        Schema::dropIfExists('cursos');
    }
}
