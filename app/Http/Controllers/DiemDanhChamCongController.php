<?php

namespace App\Http\Controllers;

use App\Models\caLamViec;
use App\Models\diemDanh_chamCong;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DiemDanhChamCongController extends Controller
{
    public function diemDanhChamCong()
    {
        $ngayHienTai = Carbon::today();
        $maNV = session('nhanVien')->maNhanVien;
        // Lấy tất cả các ca làm việc trong ngày hiện tại
        $caLamViecNv = diemDanh_chamCong::where('maNhanVien', $maNV)->whereHas('caLamViec', function ($query) use ($ngayHienTai) {
            $query->whereDate('ngayLamviec', $ngayHienTai);
        })->with('caLamViec')->get();

        return view('admin.pages.diemDanhChamCong.index', compact('caLamViecNv'));
    }

    public function diemDanhChamCongNV(Request $request)
    {
        
        $chamCong = diemDanh_chamCong::query()->find($request->maDDvaCC);
        if($chamCong->trangThaiDiemDanh){
            $data = [
                'thoiGianChamCong' => $request->thoiGianChamCong,
                'trangThaiChamCong' => true,
            ];
            $chamCong->update($data);
            return redirect()->route('diemDanhChamCong')->with('success', 'Chấm công thành công!');
        }else{
            toastr()->error('Bạn chưa điểm danh vui lòng điểm danh chức khi chấm công!');
            return redirect()->back();
        }
       
    }
    public function diemDanhNV(Request $request)
    {
        $thoiGianDiemDanh = Carbon::parse($request->thoiGianDiemDanh)->format('H:i');
        $thoiGianBatDau = Carbon::createFromFormat('H:i', $request->thoiGianBatDau);
        $thoiGianKetThuc = Carbon::createFromFormat('H:i', $request->thoiGianKetThuc);
        $thoiGianDiemDanh = Carbon::createFromFormat('H:i',  $thoiGianDiemDanh);

        if ($thoiGianDiemDanh->between($thoiGianBatDau, $thoiGianKetThuc)) {
            $diemDanh = diemDanh_chamCong::query()->find($request->maDDvaCC);

            $data = [
                'thoiGianDiemDanh' => $request->thoiGianDiemDanh,
                'trangThaiDiemDanh' => true,
            ];
            $diemDanh->update($data);
            return redirect()->route('diemDanhChamCong')->with('success', 'Điểm danh thành công!');
        } else {
            toastr()->error('Thời gian điểm danh không nằm trong ca làm việc');
            return redirect()->back();
        }
    }

    public function huyCC(Request $request){
        $maDDvaCC = $request->maDDvaCC;
        $diemDanh = diemDanh_chamCong::query()->find($maDDvaCC);
        $diemDanh->update(['thoiGianChamCong'=>null, 'trangThaiChamCong'=>false]);
        toastr()->success('Hủy chấm công thành công!!');

        return redirect()->route('diemDanhChamCong');
    }

    public function huyDD(Request $request){

        $maDDvaCC = $request->maDDvaCC;
        $diemDanh = diemDanh_chamCong::query()->find($maDDvaCC);
        $diemDanh->update(['trangThaiDiemDanh' => false, 'thoiGianDiemDanh' => null, 'thoiGianChamCong'=>null, 'trangThaiChamCong'=>false]);
        toastr()->success('Hủy điểm danh thành công!!');

        return redirect()->route('diemDanhChamCong');
    }
}
