<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->string('numero_factura', 15);
            $table->date('fecha_emision');
            $table->double('consumo_actual');
            $table->double('consumo_anterior');
            $table->double('total_pagar');
            $table->unsignedBigInteger('cliente_id');
            $table->foreign("cliente_id")->references("id")->on("clientes");
            $table->unsignedBigInteger('servicio_id');
            $table->foreign("servicio_id")->references("id")->on("servicios");
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
        Schema::dropIfExists('facturas');
    }
}
