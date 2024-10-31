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
        Schema::create('calamviec', function (Blueprint $table) {
                $table->integer('maCa')->primary();
                $table->dateTime('thoiGianBatDau');
                $table->dateTime('thoiGianKetThuc');
                $table->dateTime('ngayLamviec');
                $table->integer('soLuongMax');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calamviec');
    }
};
