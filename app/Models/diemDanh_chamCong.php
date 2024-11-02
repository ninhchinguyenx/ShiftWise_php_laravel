<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diemDanh_chamCong extends Model
{
    use HasFactory;
    protected $table = 'diemdanh_chamcong';
    protected $primaryKey = 'maDDvaCC';
    public $timestamps = false;
    protected $fillable = [
        'maDDvaCC',
        'maNhanVien',
        'maCa',
        'thoiGianDiemDanh',
        'trangThaiDiemDanh',
        'thoiGianChamCong',
        'trangThaiChamCong'
    ];
    protected $casts = [
        'trangThaiDiemDanh',
        'trangThaiChamCong'
    ];
    public function nhanVien()
    {
        return $this->belongsTo(nhanVien::class, 'maNhanVien', 'maNhanVien');
    }
    public function caLamViec()
    {
        return $this->belongsTo(caLamViec::class, 'maCa', 'maCa');
    }
}
