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
        Schema::create('ldtnhacc', function (Blueprint $table) {
//$table->id();
            //$table->timestamps();
            $table->string('ldtMaNCC')->primary();
            $table->string('ldtTenNCC');
            $table->string('ldtDiaChi');
            $table->string('ldtDienThoai');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ldtnhacc');
    }
};
