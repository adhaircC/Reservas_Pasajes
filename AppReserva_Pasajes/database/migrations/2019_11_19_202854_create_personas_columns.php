<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Personas', function (Blueprint $table) {
            $table->string('Doc_Id',13)->primary();
            $table->string('Nombre',20);
            $table->string('ApellidoP',20);
            $table->string('ApellidoM',20);
            $table->string('Email',50);
            $table->string('Telefono',20);
            $table->tinyInteger('Genero');
            $table->date('FechaNacimiento');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Personas', function (Blueprint $table) {
            $table->dropColumn('Doc_Id');
            $table->dropColumn('Nombre');
            $table->dropColumn('ApellidoP');
            $table->dropColumn('ApellidoM');
            $table->dropColumn('Email');
            $table->dropColumn('Telefono');
            $table->dropColumn('Genero');
            $table->dropColumn('FechaNacimiento');
            //
        });
    }
}
