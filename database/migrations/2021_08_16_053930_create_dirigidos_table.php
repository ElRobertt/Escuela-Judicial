<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirigidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dirigidos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::table('cursos', function (Blueprint $table) {
            $table->unsignedBigInteger('dirigido_id')->nullable()->after('id');
            $table->foreign('dirigido_id')->references('id')->on('dirigidos')
            ->onUpdate('cascade')
            ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){

        Schema::table('cursos', function (Blueprint $table) {
            $table->dropForeign('cursos_dirigido_id_foreign');
            $table->dropColumn('dirigido_id');
        });

        Schema::dropIfExists('dirigidos');
    }
}
