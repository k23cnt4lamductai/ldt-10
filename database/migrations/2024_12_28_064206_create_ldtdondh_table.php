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
        Schema::create('ldtdondh', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('ldtSoDH')->primary();
            $table->date('ldtNgayDH');
            $table->string('ldtMaNCC');
            $table->foreign('ldtMaNCC')->references('ldtMaNCC')->on('ldtnhacc');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ldtdondh');
    }
};
