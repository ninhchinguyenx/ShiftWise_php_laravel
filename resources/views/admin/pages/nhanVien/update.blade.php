@extends('admin.layouts.master') 
@section('admin-css-libs')
    <!-- dropzone css -->
    <link rel="stylesheet" href="/admin-assets/libs/dropzone/dropzone.css" type="text/css" />
    <!-- Filepond css -->
    <link rel="stylesheet" href="/admin-assets/libs/filepond/filepond.min.css" type="text/css" />
    <link rel="stylesheet" href="/admin-assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css">
@endsection
@section('admin-ss-content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Sửa nhân viên</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('nhanvien.update',$nhanVien->maNhanVien)}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col d-flex flex-column justify-content-center items-center">
                                <div class="d-flex justify-content-center align-items-center mb-2">
                                    <img src="{{ asset('storage/' . $nhanVien->anh)}}" alt="" class="h-full w-full object-fit-cover" style="max-height: 300px;" >
                                </div>
                                <div class="avatar-xl mx-auto">
                                    <input type="file" class="filepond filepond-input-circle" name="anh" accept="image/png, image/jpeg, image/gif" />
                                </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="maNhanVien" class="form-label">Mã nhân viên</label>
                                <input type="text" disabled class="form-control" id="maNhanVien " name="maNhanVien" value="{{$nhanVien->maNhanVien}}">
                            </div>
                            <div>
                                <label for="tenDangNhap" class="form-label">Tên đăng nhập</label>
                                <input type="text" class="form-control" id="tenDangNhap " name="tenDangNhap" value="{{ $nhanVien->tenDangNhap}}">
                                @error('tenDangNhap')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <label for="hoTen" class="form-label">Họ và tên</label>
                                <input type="text" class="form-control" id="hoTen" name="hoTen" value="{{$nhanVien->hoTen}}">
                            </div>
                            <div>
                                <label for="sinhNhat" class="form-label">Ngày sinh</label>
                                <input type="date" class="form-control" id="sinhNhat" name="sinhNhat" value="{{$nhanVien->sinhNhat}}">
                            </div>
                            <div>
                                <label for="diaChi" class="form-label">Địa Chỉ</label>
                                <input type="text" class="form-control" id="diaChi" name="diaChi" value="{{$nhanVien->diaChi}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div>
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{$nhanVien->email}}">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <label for="SDT" class="form-label">SĐT</label>
                                <input type="number" class="form-control" id="SDT" name="SDT" value="{{$nhanVien->SDT}}">
                            </div>
                            <div>
                                <label for="chucVu" class="form-label">Chức vụ</label>
                                <input type="text" class="form-control" id="chucVu" name="chucVu" value="{{$nhanVien->chucVu}}">
                            </div> 
                            <div>
                                <label for="thamNien" class="form-label">Thâm niên</label>
                                <input type="text" class="form-control" id="thamNien" name="thamNien" value="{{$nhanVien->thamNien}}">
                            </div>
                            <div>
                                <label for="luong" class="form-label">Lương</label>
                                <input type="number" class="form-control" id="luong" name="luong" value="{{$nhanVien->luong}}">
                            </div>
                            <div>
                                <label for="STK" class="form-label">STK</label>
                                <input type="number" class="form-control" id="STK" name="STK" value="{{$nhanVien->STK}}">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mt-3 gap-1">
                        <button type="submit" class="btn btn-secondary">Lưu</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!--end col-->
</div><!--end row-->
@section('admin-js-lib')
  <!-- dropzone min -->
  <script src="/admin-assets/libs/dropzone/dropzone-min.js"></script>
  <!-- filepond js -->
  <script src="/admin-assets/libs/filepond/filepond.min.js"></script>
  <script src="/admin-assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>
  <script src="/admin-assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js"></script>
  <script src="/admin-assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js"></script>
  <script src="/admin-assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js"></script>

  <script src="/admin-assets/js/pages/form-file-upload.init.js"></script>
@endsection
@endsection
