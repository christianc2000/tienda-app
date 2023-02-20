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
        Schema::create('producto_contenedors', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('cantidad');
            $table->unsignedBigInteger('padre_id');
            $table->unsignedBigInteger('hijo_id');
            $table->foreign('padre_id')->references('id')->on('productos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('hijo_id')->references('id')->on('productos')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('producto_contenedors');
    }
};
