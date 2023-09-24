<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('department_material', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('material_id');
            // Altri campi desiderati per la tabella pivot
            $table->timestamps();

            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('material_id')->references('id')->on('materials');
        });
    }

    public function down()
    {
        Schema::dropIfExists('department_material');
    }
};
