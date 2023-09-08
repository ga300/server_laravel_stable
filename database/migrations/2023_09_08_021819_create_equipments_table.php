<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('equipments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('supplier_id');
            

            $table->string('codice')->unique();
            $table->string('nome');
            $table->text('descrizione')->nullable();
            
            $table->float('prezzo_unitario', 8, 2);
            $table->integer('giacenza');
            $table->string('note');
            // Altri campi desiderati per le attrezzature

            $table->timestamps();
            $table->foreign('supplier_id')->references('id')->on('suppliers');
        });
    }

    public function down()
    {
        Schema::dropIfExists('equipment');
    }
};
