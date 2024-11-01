<?php

namespace App\Http\Controllers;

use App\Http\Requests\NhanVienRequest;
use App\Http\Requests\UpdateNhanVienRequest;
use App\Models\nhanVien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class NhanVienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nhanVien = nhanVien::orderBy('created_at', 'desc')->get();
        return view("admin.pages.nhanVien.index", compact('nhanVien'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.pages.nhanVien.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NhanVienRequest $request)
    {
        try {
            DB::beginTransaction();
            $nhanVien = $request->except('anh', 'matKhau');
            $nhanVien['matKhau'] = "12345678";
            if ($request->hasFile('anh')) {
                $nhanVien['anh'] = Storage::put('nhanVien', $request->file('anh'));
            }
            nhanVien::query()->create($nhanVien);
            toastr()->success('Tạo thành công!');
            DB::commit();
            return redirect()->route('nhanvien.index');
        } catch (\Exception $e) {
            DB::rollBack();
            toastr()->error('Tạo thất bại!');
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $maNhanVien)
    {
        $nhanVien = nhanVien::query()->find($maNhanVien);
        return view("admin.pages.nhanVien.show", compact('nhanVien'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $maNhanVien)
    {
        $nhanVien = nhanVien::query()->find($maNhanVien);
        return view("admin.pages.nhanVien.update", compact('nhanVien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNhanVienRequest $request, string $maNhanVien)
    {
        try {
            $findNhanVienById = nhanVien::query()->find($maNhanVien);
            $data = $request->except('anh', 'matKhau');
            $data['matKhau'] = "12345678";

            $nhanVien['matKhau'] = "12345678";
            if ($request->hasFile('anh')) {
                $data['anh'] = Storage::put('nhanVien', $request->file('anh'));
            }
            $currentPathImage = $findNhanVienById->anh;
            $findNhanVienById->update($data);
            if ($request->hasFile('anh') && Storage::exists($currentPathImage)) {
                Storage::delete($currentPathImage);
            }
            toastr()->success('Sửa thành công!');

            return  redirect()->route('nhanvien.index');;
        } catch (\Exception $e) {
            return back()->with('error', 'Đã xảy ra lỗi khi cập nhật nhân viên. Vui lòng thử lại.' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $maNhanVien)
    {
        try {
            $findNhanVienById = nhanVien::query()->find($maNhanVien);
            
            $findNhanVienById->delete();
            toastr()->success('Xoá thành công!');

            return  redirect()->route('nhanvien.index');;
        } catch (\Exception $e) {
            return back()->with('error', 'Đã xảy ra lỗi khi cập nhật nhân viên. Vui lòng thử lại.' . $e->getMessage());
        }
    }
}
