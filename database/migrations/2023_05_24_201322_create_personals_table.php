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
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->String("nombre")->nullable();
            $table->String("email")->nullable();
            $table->String("empresa")->nullable();
            $table->String("area")->nullable();
            $table->text("descripcion")->nullable();
            $table->text("img")->nullable();
            $table->text("twiter")->nullable();
            $table->text("facebook")->nullable();
            $table->text("instagram")->nullable();
            $table->text("linkedin")->nullable();
            $table->integer("valoracion")->nullable();
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
        Schema::dropIfExists('personals');
    }
};
