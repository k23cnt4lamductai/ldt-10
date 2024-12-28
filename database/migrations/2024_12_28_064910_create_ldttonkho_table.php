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
        Schema::create('ldttonkho', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('ldtNamThang');
            $table->string('ldtMaVTu');
            $table->integer('ldtSLDau');
            $table->integer('ldtTongSLN');
            $table->integer('ldtTongSLX');
            $table->integer('ldtTongSLCuoi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ldttonkho');
    }
};
