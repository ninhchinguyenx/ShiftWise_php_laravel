@extends('admin.layouts.master') 
@section('admin-css-libs')
 <!--datatable css-->
 <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css"/>
 <!--datatable responsive css-->
 <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css"/>

 <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
@endsection
 @section('admin-ss-content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between items-center">
                    <div class="card-title mb-0">Danh sách ca làm việc</div>
                   
                 </div>
            </div>
            <div class="card-body">
                <table id="example"
                       class="table table-bordered dt-responsive nowrap table-striped align-middle"
                       style="width:100%">
                    <thead>
                    <tr>
                        <th scope="col" style="width: 10px;">
                            <div class="form-check">
                                <input class="form-check-input fs-15" type="checkbox" id="checkAll"
                                       value="option">
                            </div>
                        </th>
                        <th data-ordering="false">Mã ca</th>
                        <th data-ordering="false">Thời gian bắt đầu</th>
                        <th data-ordering="false">Thời gian kết thúc</th>
                        <th data-ordering="false">Ngày</th>
                        <th data-ordering="false">Số lượng</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($caLamViec as $item) 
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                            value="option1">
                                    </div>
                                </th>
                                <td>{{$item->maCa}}</td>
                               
                                <td>{{$item->thoiGianBatDau}}</td>
                                <td>{{$item->thoiGianKetThuc}}</td>
                                <td>{{$item->ngayLamviec}}</td>
                                <td>{{$item->soLuongMax}}</td>
                                
                                <td>
                                    @php
                                        $maNV = session('nhanVien')->maNhanVien;
                                         $status = \App\Models\diemDanh_chamCong::where('maNhanVien', $maNV)->where('maCa', $item->maCa)->exists();
                                    @endphp   
                                    @if(!$status)
                                    <form action="{{route("dkiCaLamViec")}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="maCa" value="{{$item->maCa}}">
                                        <button class="btn btn-danger">Đăng kí</button>
                                    </form>
                                       
                                    @else
                                    <form action="{{route("dkiCaLamViec")}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="maCa" value="{{$item->maCa}}">
                                        <button class="btn btn-secondary">Huỷ ca</button>
                                    </form>
                                    @endif
                                </td>
                            </tr>
                         @endForEach
                    </tbody>
                </table>
            </div>
        </div>
    </div><!--end col-->
</div><!--end row-->
@endsection @section('admin-js-lib')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!--datatable js-->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<script src="/admin-assets/js/pages/datatables.init.js"></script>
<script>
    function confirmDelete() {
        return confirm("Bạn có chắc chắn muốn xóa không?");
    }
</script>
@endsection