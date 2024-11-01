<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diemDanh_chamCong extends Model
{
    use HasFactory;
    protected $table = 'diemdanh_chamcong';
    protected $primaryKey = 'maDDvaCC';
    protected $fillable = [
        'maDDvaCC',
        'maNhanVien',
        'maCa',
        'thoiGianDiemDanh',
        'trangThaiDiemDanh',
        'thoiGianChamCong',
        'trangThaiChamCong'
    ];
}
