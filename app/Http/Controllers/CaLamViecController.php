<?php

namespace App\Http\Controllers;

use App\Http\Requests\CalamviecRequest;
use App\Http\Requests\UpdateCalamviecRequest;
use App\Models\caLamViec;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CaLamViecController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $caLamViec = caLamViec::orderBy('created_at', 'desc')->get(); 
        return view("admin.pages.caLamViec.index", compact('caLamViec'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.pages.caLamViec.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {
            DB::beginTransaction();
            $caLamViec = $request->all();
            caLamViec::query()->create($caLamViec);
            toastr()->error('Tạo thành công!');

            DB::commit();
            return redirect()->route('calamviec.index');
        } catch (\Exception $e) {
            DB::rollBack();
            toastr()->error('Tạo thất bại!');
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $maCa)
    {

        $caLamViec = caLamViec::query()->find($maCa);
        return view("admin.pages.caLamViec.update", compact('caLamViec'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCalamviecRequest $request, string $maCa)
    {
        try {
            $findCaById = caLamViec::query()->find($maCa);
            $findCaById->update($request->all());          
            toastr()->success('Sửa thành công!');

            return  redirect()->route('calamviec.index');
        } catch (\Exception $e) {
            return back()->with('error', 'Đã xảy ra lỗi khi cập nhật ca làm việc. Vui lòng thử lại.' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $maCa)
    {
        $findCaById = caLamViec::query()->find($maCa);
        $findCaById->delete();
        toastr()->success('Xoá thành công!');
        return  redirect()->route('calamviec.index');

    }
}
