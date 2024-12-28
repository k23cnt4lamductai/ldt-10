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
        Schema::create('ldtpxuat', function (Blueprint $table) {
  //$table->id();
            //$table->timestamps();
            $table->string('ldtSoPX')->primary();
            $table->date('ldtNgayXuat');
            $table->string('ldtTenKH',100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ldtpxuat');
    }
};
