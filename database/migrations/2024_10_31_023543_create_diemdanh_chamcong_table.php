<?php

use App\Models\caLamViec;
use App\Models\nhanVien;
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
        Schema::create('diemdanh_chamcong', function (Blueprint $table) {
            if (!Schema::hasTable('diemdanh_chamcong')) {    
            $table->integer("maDDvaCC")->primary();
            $table->integer("maNhanVien");
            $table->integer("maCa");
            $table->dateTime("thoiGianDiemDanh");
            $table->boolean("trangThaiDiemDanh");
            $table->dateTime("thoiGianChamCong");
            $table->boolean("trangThaiChamCong");
            $table->foreign("maNhanVien")->references("maNhanVien")->on("nhanvien")->onDelete("cascade");
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diemdanh_chamcong');
    }
};
