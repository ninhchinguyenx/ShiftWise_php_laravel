@extends('admin.layouts.master') 
@section('admin-ss-content')
<div class="row">
<div class="container-fluid">

    <div class="position-relative mx-n4 mt-n4">
        <div class="profile-wid-bg profile-setting-img">
            <img src="assets/images/profile-bg.jpg" class="profile-wid-img" alt="">
            <div class="overlay-content">
                <div class="text-end p-3">
                    <div class="p-0 ms-auto rounded-circle profile-photo-edit">
                        <input id="profile-foreground-img-file-input" type="file" class="profile-foreground-img-file-input">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xxl-3">
            <div class="card mt-n5">
                <div class="card-body p-4">
                    <div class="text-center">
                        <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                            <img src="{{ asset('storage/' . $nhanVien->anh)}}" class="rounded-circle avatar-xl img-thumbnail user-profile-image" alt="user-profile-image">
                            <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                              
                                <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                    <span class="avatar-title rounded-circle bg-light text-body">
                                        <i class="ri-camera-fill"></i>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <h5 class="fs-16 mb-1">{{$nhanVien->hoTen}}</h5>
                        <p class="text-muted mb-0">{{$nhanVien->chucVu}}</p>
                    </div>
                </div>
            </div>
            <!--end card-->

            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-grow-1">
                            <h5 class="card-title mb-0">Thông tin cá nhân</h5>
                        </div>
                    </div>
                    <div class="mb-3 d-flex gap-3">
                        <div class="w-25">
                            Địa chỉ                          
                        </div>
                        <div class="w-25">
                            {{$nhanVien->diaChi}}                         
                        </div>
                    </div>
                    <div class="mb-3 d-flex gap-3">
                        <div class="w-25">
                            Số điện thoại                          
                        </div>
                        <div class="w-25">
                            {{$nhanVien->SDT}}                         
                        </div>
                    </div>
                    <div class="mb-3 d-flex gap-3">
                        <div class="w-25">
                            Ngày sinh                          
                        </div>
                        <div class="w-25">
                            {{$nhanVien->sinhNhat}}                         
                        </div>
                    </div>
                    <div class="mb-3 d-flex gap-3">
                        <div class="w-25">
                            Thâm niên                         
                        </div>
                        <div class="w-25">
                            {{$nhanVien->thamNien}}                         
                        </div>
                    </div>
                    <div class="mb-3 d-flex gap-3">
                        <div class="w-25">
                            Email                         
                        </div>
                        <div>
                            {{$nhanVien->email}}                         
                        </div>
                    </div>
                    <div class="mb-3 d-flex gap-3">
                        <div class="w-25">
                            Số tài khoản                         
                        </div>
                        <div>
                            {{$nhanVien->STK}}                         
                        </div>
                    </div>
                </div>
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col-xxl-9">
            <div class="card mt-xxl-n5">
                <div class="card-header">
                    <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab" aria-selected="true">
                                <i class="fas fa-home"></i> Các ca làm việc
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-body p-4">
                    
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->

</div>
</div>
@endsection

@section('admin-js-lib')
    <!-- profile-setting init js -->
    <script src="assets/js/pages/profile-setting.init.js"></script>
@endsection