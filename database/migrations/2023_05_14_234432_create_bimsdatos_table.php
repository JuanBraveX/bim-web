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
        Schema::create('bimsdatos', function (Blueprint $table) {
            $table->id();
            $table->String("nombre")->nullable();
            $table->text("red1")->nullable();
            $table->text("red2")->nullable();
            $table->text("red3")->nullable();
            $table->text("red4")->nullable();
            $table->text("telefono")->nullable();
            $table->text("correo")->nullable();
            $table->text("ubicacionlink")->nullable();
            $table->text("ubicaciontext")->nullable();
            $table->text("calendarlink")->nullable();
            $table->text("mision")->nullable();
            $table->text("vision")->nullable();
            $table->text("valores")->nullable();
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
        Schema::dropIfExists('bimsdatos');
    }
};
