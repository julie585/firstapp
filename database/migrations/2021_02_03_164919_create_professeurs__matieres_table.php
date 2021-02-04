<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesseursMatieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professeurs__matieres', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('professeurs_id');
            $table->foreign('professeurs_id')
                    ->references('professeurs_id')
                    ->on('professeurs')
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
        Schema::dropIfExists('professeurs__matieres');
    }
}
