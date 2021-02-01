<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsProfesseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('etudiants__professeurs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('etudiants_id');
            $table->foreign('etudiants_id')
                    ->references('etudiants_id')
                    ->on('etudiants')
                    ->onDelete('restrict')
                    ->onUpdate('restrict');
             $table->unsignedBigInteger('professeurs_id');
            $table->foreign('professeurs_id')
                    ->references('professeurs_id')
                    ->on('professeurs')
                    ->onDelete('restrict')
                    ->onUpdate('restrict');
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
        
        Schema::dropIfExists('etudiants__professeurs');
    }
}
