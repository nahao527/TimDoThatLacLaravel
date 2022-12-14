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
                              <li class="breadcrumb-item active" aria-current="page">Thông tin cá nhân</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">THÔNG TIN CÁ NHÂN</h1> 
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
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="{{asset('images/'. Auth::user()->avatar)}}"
                                        class="rounded-circle" width="150" />
                                    <h4 class="card-title m-t-10">{{Auth::User()->ho_ten}}</h4>
                                    <h6 class="card-subtitle">TÀI KHOẢN ADM</h6>
                                </center>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="card-body"> <small class="text-muted">Địa chỉ email </small>
                                <h6>{{Auth::User()->email}}</h6> <small class="text-muted p-t-30 db">Điện thoại</small>
                                <h6>{{Auth::User()->so_dien_thoai}}</h6> <small class="text-muted p-t-30 db">Địa chỉ công ty</small>
                                <h6>TP. Hồ Chí Minh</h6>
                                <div class="map-box">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.517758056738!2d106.69916291533417!3d10.771600262226862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f40a3b49e59%3A0xa1bd14e483a602db!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEvhu7kgdGh14bqtdCBDYW8gVGjhuq9uZw!5e0!3m2!1svi!2s!4v1668404760330!5m2!1svi!2s" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div> <small class="text-muted p-t-30 db">Thông tin khác</small>
                                <br />
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-facebook-f"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-youtube"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2" method="post" action="{{route('xu-li-cap-nhat-tai-khoan',['id'=>$thongtinTaiKhoan->id])}}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-md-12">Tên đăng nhập</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="{{Auth::User()->ten_dang_nhap}}"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Họ tên</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="{{Auth::User()->ho_ten}}"
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
                                            <input type="email" placeholder="{{Auth::User()->email}}"
                                                class="form-control form-control-line" name="email"
                                                id="example-email">
                                        </div>
                                        @error('email')
                                <div class="alert alert-danger">
                                    <li>{{ $message }}</li>
                                </div>
                                @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Số điện thoại</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="{{Auth::User()->so_dien_thoai}}"
                                                class="form-control form-control-line" name="sodienthoai">
                                        </div>
                                        @error('sodienthoai')
                                <div class="alert alert-danger">
                                    <li>{{ $message }}</li>
                                </div>
                                @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success text-white" type="submit">Cập nhật</button>
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