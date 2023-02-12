<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospedajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospedajes', function (Blueprint $table) {
            $table->id();

            $table->date('fechainicio');
            $table->date('fechasalida');

            $table->unsignedBigInteger('idhabitacion');
            $table->foreign('idhabitacion')->references('id')->on('habitacions');
            
            $table->integer('diashospedaje');

            $table->unsignedBigInteger('idhuesped');
            $table->foreign('idhuesped')->references('id')->on('huespeds');
            
            $table->string('estado', 50);

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
        Schema::dropIfExists('hospedajes');
    }
}
