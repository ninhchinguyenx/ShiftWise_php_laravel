<?php

namespace App\Http\Controllers;

use App\Models\caLamViec;
use App\Models\diemDanh_chamCong;
use Illuminate\Http\Request;

class DkiCaLamViecController extends Controller
{

    public function dkiCa()
    {
        $caLamViec = caLamViec::orderBy('created_at', 'desc')->get();
        return view("admin.pages.dkiCa.index", compact('caLamViec'));
    }
    public function dkiCaLamViec(Request $request)
    {
        $maCa =  $request->maCa;
        $maNhanVien = session('nhanVien')->maNhanVien;
        $status = diemDanh_chamCong::where('maNhanVien', $maNhanVien)->where('maCa', $maCa)->exists();
        if ($status) {
            return redirect()->back()->with('error', 'Bạn đã đăng kí ca này');
        }
        $caLamViec = caLamViec::query()->find($maCa);
        $maDDvaCC = substr(str_shuffle("0123456789"), 0, 8);
        if ($caLamViec && $caLamViec->soLuongMax > 0) {
            $data = [
                'maDDvaCC' => $maDDvaCC,
                'maNhanVien' => $maNhanVien,
                'maCa' => $maCa,
                'thoiGianDiemDanh'=> null,
                'thoiGianChamCong'=>null
            ];
            diemDanh_chamCong::query()->create($data);
            $caLamViec->decrement('soLuongMax', 1);
            return redirect()->route('dkiCa')->with('success', 'Đăng kí ca thành công');
        } else {
            return redirect()->back()->with('error', 'Số lượng ca đã đầy.');
        }
    }
}
