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
            $table->string('thoiGianDiemDanh')->nullable()->change();
            $table->string('thoiGianChamCong')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('diemdanh_chamcong', function (Blueprint $table) {
            //
        });
    }
};
