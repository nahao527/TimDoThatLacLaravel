@extends('quan-tri.main-layout-quan-tri')
@section('content')
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="index.html" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Chi tiết bài viết</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">CHI TIẾT BÀI VIẾT</h1> 
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
                                <form class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                        <label class="col-md-12">Tiêu đề</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="{{$ctBaiVietQT->tieu_de}}"
                                                class="form-control form-control-line" name="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Nội dung</label>
                                        <div class="col-md-12">
                                        <textarea class="form-control" name="description" id="description" cols="30" rows="10" required>
                                        {{$ctBaiVietQT->noi_dung}}
                                        </textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Ảnh</label>
                                        <div class="col-md-12">
                                        <center class="m-t-30">
                                        <img src="{{asset('images/'.$ctBaiVietQT->hinh_anh_1)}}" alt="" width="200px">
                                        <img src="{{asset('images/'.$ctBaiVietQT->hinh_anh_2)}}" alt="" width="200px">
                                        <img src="{{asset('images/'.$ctBaiVietQT->hinh_anh_3)}}" alt="" width="200px">
                                        <img src="{{asset('images/'.$ctBaiVietQT->hinh_anh_4)}}" alt="" width="200px">
                                        <img src="{{asset('images/'.$ctBaiVietQT->hinh_anh_5)}}" alt="" width="200px">
                                        </center>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12 text-center">
                                            <a href="{{route('xoa-bai-viet', ['id' => $ctBaiVietQT->id])}}" class="btn btn btn-danger" onclick="confirmation(event)">Xóa bài viết này!</a>
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