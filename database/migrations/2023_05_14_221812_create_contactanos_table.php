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
        Schema::create('contactanos', function (Blueprint $table) {
            $table->id();
            $table->String("nombre");
            $table->String("apellidos");
            $table->String("email");
            $table->String("telefono");
            $table->String("empresa");
            $table->String("puesto");
            $table->text("mensaje");
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
        Schema::dropIfExists('contactanos');
    }
};
