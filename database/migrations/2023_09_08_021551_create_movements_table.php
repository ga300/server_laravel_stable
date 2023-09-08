<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('material_movements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('material_id');

            $table->string('tipo_documento');
            $table->string('causale');

            $table->integer('quantita');
            
            $table->date('data');
            $table->text('note')->nullable();
            $table->string('ubicazione')->nullable();
            $table->integer('giacenza_aspettata')->nullable();
            // Altri campi desiderati per i movimenti dei materiali
            $table->timestamps();

            $table->foreign('material_id')->references('id')->on('materials');
        });
    }

    public function down()
    {
        Schema::dropIfExists('material_movements');
    }
};
