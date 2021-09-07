<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEdadFieldToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('edad');
            $table->string('numero');
            $table->string('cargo');
            $table->string('institucion');
            $table->string('imagen_perfil');
             $table->string('acta_nac');
             $table->string('cedula');
             $table->string('credencial');
             $table->string('carta_expo');
             $table->string('fotografia');
             $table->string('curp');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('edad');
            $table->dropColumn('numero');
            $table->dropColumn('cargo');
            $table->dropColumn('institucion');
            $table->dropColumn('imagen_perfil');
            $table->dropColumn('acta_nac');
            $table->dropColumn('cedula');
            $table->dropColumn('credencial');
            $table->dropColumn('carta_expo');
            $table->dropColumn('fotografia');
            $table->dropColumn('curp');
        });
    }
}
