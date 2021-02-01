<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsMatieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::disableForeignKeyConstraints();
        Schema::create('etudiants__matieres', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('etudiants_id');
            $table->foreign('etudiants_id')
                    ->references('etudiants_id')
                    ->on('etudiants')
                    ->onDelete('restrict')
                    ->onUpdate('restrict');
             $table->unsignedBigInteger('matières_id');
            $table->foreign('matières_id')
                    ->references('matières_id')
                    ->on('matières')
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
        Schema::dropIfExists('etudiants__matieres');
    }
}
