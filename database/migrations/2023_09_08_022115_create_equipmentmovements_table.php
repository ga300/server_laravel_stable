<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('equipment_movements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('equipment_id');

            $table->string('tipo_documento');
            $table->string('causale');
            $table->integer('quantita');

            $table->date('data');
            $table->text('note')->nullable();
            $table->string('ubicazione')->nullable();
            $table->integer('giacenza_aspettata')->nullable();
            // Altri campi desiderati per i movimenti delle attrezzature
            $table->timestamps();

            $table->foreign('equipment_id')->references('id')->on('equipments');
        });
    }

    public function down()
    {
        Schema::dropIfExists('equipment_movements');
    }
};