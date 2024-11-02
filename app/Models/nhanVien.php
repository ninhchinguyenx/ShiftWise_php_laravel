<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nhanVien extends Model
{
    use HasFactory;
    protected $table = 'nhanvien';
    protected $primaryKey ='maNhanVien'; 
    protected $fillable = ['maNhanVien', 'anh', 'tenDangNhap', 'matKhau', 'thamNien', 'email','SDT','STK','diaChi','chucVu','luong','hoTen','sinhNhat'];
    public function diemDanhChamCong()
    {
        return $this->hasMany(diemDanh_chamCong::class, 'maNhanVien', 'maNhanVien');
    }
}
