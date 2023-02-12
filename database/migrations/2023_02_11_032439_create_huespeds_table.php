<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHuespedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huespeds', function (Blueprint $table) {
            $table->id();

            $table->string('cihuesped', 25);
            $table->string('nombrecompleto', 150);

            $table->unsignedBigInteger('idciudad');
            $table->foreign('idciudad')->references('id')->on('ciudads');
            
            $table->string('telefono', 50)->nullable();
            $table->string('profesion', 100)->nullable();

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
        Schema::dropIfExists('huespeds');
    }
}
