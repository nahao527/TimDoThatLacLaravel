@extends('quan-tri.main-layout-quan-tri')
@section('content')
<div class="page-wrapper">
@include('sweetalert::alert')
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="index.html" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Tài Khoản</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Quản lý tài khoản</h1> 
                        <a href="{{route('show-them-tai-khoan-qt')}}" class="btn btn-success text-white">Thêm tài khoản quản trị viên</a>
                    </div>  
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title m-t-40"><i
                                        class="m-r-5 font-18 mdi mdi-numeric-1-box-multiple-outline"></i>DANH SÁCH TÀI KHOẢN</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">STT</th>
                                                <th scope="col">ID</th>
                                                <th scope="col">Họ Tên</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Số Điện Thoại</th>
                                                <th scope="col">Tên Tài Khoản</th>
                                                <th scope="col">Quyền</th>
                                                <th scope="col">Chức Năng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($dsTaiKhoan as $TaiKhoan)
                                            <tr> 
                                            <td>{{++$i}}</td>
                                                <td>{{$TaiKhoan->id}}</td>
                                                <td>{{$TaiKhoan->ho_ten}}</td>
                                                <td>{{$TaiKhoan->email}}</td>
                                                <td>{{$TaiKhoan->so_dien_thoai}}</td>
                                                <td>{{$TaiKhoan->ten_dang_nhap}}</td>
                                                @if($TaiKhoan->adm==1)
                                                <td>Tài Khoản ADM</td>
                                                @else  
                                                <td>Tài Khoản Người Dùng</td>
                                                @endif
                                                <td><a class="btn btn-danger text-white" href="{{route('xoa-tai-khoan-qtv',['id'=>$TaiKhoan->id])}}" onclick="confirmation(event)">Xóa tài khoản</a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{$dsTaiKhoan->links()}}
                        </div>   
                    </div> 
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
</div>
@endsection 