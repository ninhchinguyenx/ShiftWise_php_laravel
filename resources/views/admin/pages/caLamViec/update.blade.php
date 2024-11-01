@extends('admin.layouts.master') 
@section('admin-ss-content')
<div class="row">
    <div class="col-lg-12 d-flex justify-content-center items-center">
        <div class="card " style="width: 500px">
            <div class="card-header">
                <h5 class="card-title mb-0">Sửa ca làm việc</h5>
            </div>
            <div class="card-body">
                <form action="{{route("calamviec.update", $caLamViec->maCa)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col" >
                            <div>
                                <label for="maCa" class="form-label">Mã ca</label>
                                <input type="text" disabled class="form-control" id="maCa " name="maCa" value="{{ $caLamViec->maCa }}">
                                @error('maCa')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                            <div>
                                <label for="thoiGianBatDau" class="form-label">Thời gian bắt đầu</label>
                                <input type="time" class="form-control" id="thoiGianBatDau " name="thoiGianBatDau" value="{{ $caLamViec->thoiGianBatDau }}">
                                @error('thoiGianBatDau')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <label for="thoiGianKetThuc" class="form-label">Thời gian kết thúc</label>
                                <input type="time" class="form-control" id="thoiGianKetThuc " name="thoiGianKetThuc" value="{{ $caLamViec->thoiGianKetThuc }}">
                                @error('thoiGianKetThuc')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <label for="ngayLamviec" class="form-label">Ngày làm việc</label>
                                <input type="date" class="form-control" id="ngayLamviec " name="ngayLamviec" value="{{ $caLamViec->ngayLamviec }}">
                            </div>
                            <div>
                                <label for="soLuongMax" class="form-label">Số lượng</label>
                                <input type="number" class="form-control" id="soLuongMax " name="soLuongMax" value="{{ $caLamViec->soLuongMax }}">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mt-3 gap-1">
                        <button type="submit" class="btn btn-secondary">Lưu</button>
                        <a href="{{route('calamviec.index')}}" class="btn btn-outline-dark">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div><!--end col-->
</div><!--end row-->

@endsection
