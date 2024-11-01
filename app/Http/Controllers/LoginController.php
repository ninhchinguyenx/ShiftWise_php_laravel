<?php

namespace App\Http\Controllers;

use App\Models\nhanVien;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function showForm(){
        return view('admin.pages.auth.login');
    }
    public function login(Request $request){
        $tenDangNhap = $request->tenDangNhap;
        $matKhau = $request->matKhau;
        $nhanVien = nhanVien::where('tenDangNhap', $tenDangNhap)->where('matKhau', $matKhau)->first();
        if ($nhanVien) {
            Session::put('nhanVien', $nhanVien);
            toastr()->success('Đănh nhập thành công!');
            return redirect()->route('dashboard'); 
        } else {
            // Xử lý lỗi
            toastr()->error('Đănh nhập thất bại!');
            return back();
        }
    }
    public function logout(Request $request) {
        // Xóa thông tin người dùng khỏi session
        $request->session()->forget('nhanVien');
         
        toastr()->success('Đăng xuất thành công!');
        return redirect('/login'); 
    }
}
