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
        Schema::table('diemdanh_chamcong', function (Blueprint $table) {
            $table->string('thoiGianDiemDanh')->change();
            $table->string('thoiGianChamCong')->change();
            $table->boolean("trangThaiDiemDanh")->default(false)->change();
            $table->boolean("trangThaiChamCong")->default(false)->change();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
