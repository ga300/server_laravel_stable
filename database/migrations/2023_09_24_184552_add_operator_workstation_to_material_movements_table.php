<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('material_movements', function (Blueprint $table) {
            $table->unsignedBigInteger('operator_id')->nullable();
            $table->unsignedBigInteger('workstation_id')->nullable();

            $table->foreign('operator_id')->references('id')->on('operators');
            $table->foreign('workstation_id')->references('id')->on('workstations');
        });
    }

    public function down()
    {
        Schema::table('material_movements', function (Blueprint $table) {
            $table->dropForeign(['operator_id']);
            $table->dropForeign(['workstation_id']);
            $table->dropColumn(['operator_id', 'workstation_id']);
        });
    }
};
