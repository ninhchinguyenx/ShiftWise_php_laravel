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
        Schema::create('nhanvien', function (Blueprint $table) {
     
                $table->integer('maNhanVien')->primary();
                $table->string('anh');
                $table->string('tenDangNhap');
                $table->string('matKhau');
                $table->integer('thamNien');
                $table->string('email');
                $table->integer('SDT');
                $table->integer('STK');
                $table->string('diaChi');
                $table->string('chucVu');
                $table->integer('luong');
                $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhanvien');
    }
};
