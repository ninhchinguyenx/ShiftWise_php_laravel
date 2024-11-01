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
                <h5 class="card-title mb-0">Thêm mới nhân viên</h5>
            </div>
            <div class="card-body">
                <form action="{{route("nhanvien.store")}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <p class="text-muted">FilePond is a JavaScript library with profile picture-shaped file upload variation.</p>
                                <div class="avatar-xl mx-auto">
                                    <input type="file" class="filepond filepond-input-circle" name="anh" accept="image/png, image/jpeg, image/gif" />
                                </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="maNhanVien" class="form-label">Mã nhân viên</label>
                                <input type="text" class="form-control" id="maNhanVien " name="maNhanVien" value="{{ substr(str_shuffle("0123456789"), 0, 8) }}">
                            </div>
                            <div>
                                <label for="tenDangNhap" class="form-label">Tên đăng nhập</label>
                                <input type="text" class="form-control" id="tenDangNhap " name="tenDangNhap">
                            </div>
                            <div>
                                <label for="hoTen" class="form-label">Họ và tên</label>
                                <input type="text" class="form-control" id="hoTen" name="hoTen">
                            </div>
                            <div>
                                <label for="sinhNhat" class="form-label">Ngày sinh</label>
                                <input type="date" class="form-control" id="sinhNhat" name="sinhNhat">
                            </div>
                            <div>
                                <label for="diaChi" class="form-label">Địa Chỉ</label>
                                <input type="text" class="form-control" id="diaChi" name="diaChi">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div>
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div>
                                <label for="SDT" class="form-label">SĐT</label>
                                <input type="number" class="form-control" id="SDT" name="SDT">
                            </div>
                            <div>
                                <label for="chucVu" class="form-label">Chức vụ</label>
                                <input type="text" class="form-control" id="chucVu" name="chucVu">
                            </div> 
                            <div>
                                <label for="thamNien" class="form-label">Thâm niên</label>
                                <input type="text" class="form-control" id="thamNien" name="thamNien">
                            </div>
                            <div>
                                <label for="luong" class="form-label">Lương</label>
                                <input type="number" class="form-control" id="luong" name="luong">
                            </div>
                            <div>
                                <label for="STK" class="form-label">STK</label>
                                <input type="number" class="form-control" id="STK" name="STK">
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
@endsection

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
