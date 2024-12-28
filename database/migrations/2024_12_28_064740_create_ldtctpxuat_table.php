<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ldtctpxuat', function (Blueprint $table) {
  //$table->id();
            //$table->timestamps();
            $table->string('ldtSoPX');
            $table->string('ldtMaVTu');
            $table->integer('ldtSlXuat');
            $table->float('ldtDgXuat');
            $table->primary(['ldtSoPX','ldtMaVTu']);
            $table->foreign('ldtSoPX')->references('ldtSoPX')->on('ldtpxuat');
            $table->foreign('ldtMaVTu')->references('ldtMaVTu')->on('ldtvattu'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ldtctpxuat');
    }
};
