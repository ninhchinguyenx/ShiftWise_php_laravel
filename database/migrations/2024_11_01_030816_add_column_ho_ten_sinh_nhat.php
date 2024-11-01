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
        Schema::table('nhanvien', function (Blueprint $table) {
            $table->string("hoTen");
            $table->string("sinhNhat");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('nhanvien', function (Blueprint $table) {
            $table->dropColumn("hoTen");
            $table->dropColumn("sinhNhat");
        });
    }
};
