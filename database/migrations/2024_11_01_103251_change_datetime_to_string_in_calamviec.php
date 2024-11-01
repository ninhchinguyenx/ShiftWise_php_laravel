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
        Schema::table('calamviec', function (Blueprint $table) {
            $table->string('thoiGianBatDau')->change(); // Chuyển đổi sang string
            $table->string('thoiGianKetThuc')->change(); // Chuyển đổi sang string
            $table->string('ngayLamviec')->change(); // Chuyển đổi sang string
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('calamviec', function (Blueprint $table) {
            //
        });
    }
};
