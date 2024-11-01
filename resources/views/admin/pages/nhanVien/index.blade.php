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
                    <div class="card-title mb-0">Danh sách nhân viên</div>
                    <a href="{{route("nhanvien.create")}}" class="btn btn-danger">Thêm mới</a>
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
                        <th data-ordering="false">Mã nhân viên</th>
                        <th data-ordering="false">Ảnh</th>
                        <th data-ordering="false">Tên đăng nhập</th>
                        <th data-ordering="false">Họ Tên</th>
                        <th data-ordering="false">Email</th>
                        <th>SĐT</th>
                        <th>Chức vụ</th>
                        <th>Thâm niên</th>
                        <th>Lương</th>
                        <th>Địa chỉ</th>
                        <th>STK</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($nhanVien as $item) 
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                            value="option1">
                                    </div>
                                </th>
                                <td>{{$item->maNhanVien}}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $item->anh)}}" alt="" width="50">
                                </td>
                                <td>{{$item->tenDangNhap}}</td>
                                <td>{{$item->hoTen}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->SDT}}</td>
                                <td>{{$item->chucVu}}</td>
                                <td>{{$item->thamNien}}</td>
                                <td>{{ number_format($item->luong, 0, ',', '.') . ' ₫' }}</td>
                                <td>{{$item->diaChi}}</td>
                                <td>{{$item->STK}}</td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="{{route('nhanvien.show',$item->maNhanVien)}}" class="dropdown-item"><i
                                                class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a>
                                            </li>
                                            <li><a class="dropdown-item edit-item-btn" href="{{route('nhanvien.edit', $item->maNhanVien )}}"><i
                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                Edit</a></li>
                                            <li>
                                                <form  action="{{route('nhanvien.destroy', $item->maNhanVien)}}" method="POST" class="dropdown-item remove-item-btn" onsubmit="return confirmDelete()">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="border-0 bg-transparent">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        Delete
                                                      </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
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