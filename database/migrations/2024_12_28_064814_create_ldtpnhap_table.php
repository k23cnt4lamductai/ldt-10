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
        Schema::create('ldtpnhap', function (Blueprint $table) {
//$table->id();
            //$table->timestamps();
            $table->string('ldtSoPN')->primary();
            $table->date('ldtNgayNhap');
            $table->string('ldtSoDH');
            $table->foreign('ldtSoDH')->references('ldtSoDH')->on('ldtdondh');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ldtpnhap');
    }
};
