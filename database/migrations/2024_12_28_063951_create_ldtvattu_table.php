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
        Schema::create('ldtvattu', function (Blueprint $table) {
            //$table->id();
            $table->string('ldtMaVTu')->primary();
            $table->string('ldtTenVTu')->unique();
            $table->string('ldtDvTinh');
            $table->float('ldtPhanTram');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ldtvattu');
    }
};
