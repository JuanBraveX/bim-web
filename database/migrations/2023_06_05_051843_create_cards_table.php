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
        
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->text("titulo")->nullable();
            $table->text("img")->nullable();
            $table->text("descripcion")->nullable();
            $table->text("link")->nullable();
            $table->text("tipo")->nullable();
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
        Schema::dropIfExists('cards');
    }
};
