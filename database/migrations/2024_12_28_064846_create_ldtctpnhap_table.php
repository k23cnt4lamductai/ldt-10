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
        Schema::create('ldtctpnhap', function (Blueprint $table) {
 //$table->id();
            //$table->timestamps();
            $table->string('ldtSoPN');
            $table->string('ldtMaVTu');
            $table->integer('ldtSlNhap');
            $table->float('ldtDgNhap');
            $table->primary(['ldtSoPN','ldtMaVTu']);
            $table->foreign('ldtSoPN')->references('ldtSoPN')->on('ldtpnhap');
            $table->foreign('ldtMaVTu')->references('ldtMaVTu')->on('ldtvattu'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ldtctpnhap');
    }
};
