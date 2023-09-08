<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('purchase_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('supplier_id');
            $table->unsignedBigInteger('material_id');

            $table->string('tipo_documento');
            $table->string('causale');
            $table->integer('quantita');
            $table->date('data_ordine');
            $table->date('data_consegna');
            $table->string('stato')->default('In attesa');
            // Altri campi desiderati per gli ordini di acquisto
            $table->timestamps();

            $table->foreign('supplier_id')->references('id')->on('suppliers');
            $table->foreign('material_id')->references('id')->on('materials');
        });
    }

    public function down()
    {
        Schema::dropIfExists('purchase_orders');
    }
};