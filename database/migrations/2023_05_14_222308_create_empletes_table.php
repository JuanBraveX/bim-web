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
        Schema::create('empletes', function (Blueprint $table) {
            $table->id();
            $table->String("nombre");
            $table->String("apellidos");
            $table->String("email");
            $table->String("telefono");
            $table->date("fechanacimento");
            $table->String("estudios");
            $table->String("area");
            $table->String("status");
            $table->text("cv");
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
        Schema::dropIfExists('empletes');
    }
};
