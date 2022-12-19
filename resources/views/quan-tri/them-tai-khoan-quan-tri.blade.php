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
                              <li class="breadcrumb-item active" aria-current="page">Thêm tài khoản quản trị</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Thêm tài khoản quản trị</h1> 
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
                <!-- Row -->
                <div class="row">
                    <!-- Column -->

                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2" method="post" action="{{route('xl-them-tai-khoan-qt')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-md-12">Tên đăng nhập</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Nhập tên đăng nhập"
                                                class="form-control form-control-line" name="username">
                                        </div>
                                        @error('username')
                                <div class="alert alert-danger">
                                    <li>{{ $message }}</li>
                                </div>
                                @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Họ tên</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Nhập họ tên"
                                                class="form-control form-control-line" name="hoten">
                                        </div>
                                        @error('hoten')
                                <div class="alert alert-danger">
                                    <li>{{ $message }}</li>
                                </div>
                                @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" placeholder="Nhập email"
                                                class="form-control form-control-line" name="email"
                                                id="example-email">
                                                @error('email')
                                <div class="alert alert-danger">
                                    <li>{{ $message }}</li>
                                </div>
                                @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Số điện thoại</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Nhập số điện thoại"
                                                class="form-control form-control-line" name="sodienthoai">
                                                @error('sodienthoai')
                                <div class="alert alert-danger">
                                    <li>{{ $message }}</li>
                                </div>
                                @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Nhập mật khẩu</label>
                                        <div class="col-md-12">
                                            <input type="password" placeholder="Nhập mật khẩu"
                                                class="form-control form-control-line" name="password">
                                        </div>
                                        @error('password')
                                <div class="alert alert-danger">
                                    <li>{{ $message }}</li>
                                </div>
                                @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Nhập lại mật khẩu</label>
                                        <div class="col-md-12">
                                            <input type="password" placeholder="Nhập mật khẩu"
                                                class="form-control form-control-line" name="re_password">
                                                @error('re_password')
                                <div class="alert alert-danger">
                                    <li>{{ $message }}</li>
                                </div>
                                @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-info text-white" type="submit">Thêm tài khoản</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
</div>
@endsection