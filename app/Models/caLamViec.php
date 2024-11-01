<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class caLamViec extends Model
{
    use HasFactory;
    protected $table = 'calamviec';
    protected $primaryKey ='maCa'; 
    protected $fillable = ['maCa', 'thoiGianBatDau', 'thoiGianKetThuc', 'ngayLamviec', 'soLuongMax'];
}
