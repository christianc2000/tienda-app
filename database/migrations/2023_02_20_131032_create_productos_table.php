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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique();
            $table->string('nombre');
            $table->string('imagen');
            $table->integer('stock');
            $table->unsignedInteger('nivel');
            $table->string('detalle')->nullable();
            $table->decimal('precio_compra');
            $table->decimal('precio_venta');
            $table->unsignedBigInteger('tipo_producto_id')->nullable();
            $table->foreign('tipo_producto_id')->references('id')->on('tipo_productos')->onDelete('set null')->onUpdate('set null');
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
        Schema::dropIfExists('productos');
    }
};
