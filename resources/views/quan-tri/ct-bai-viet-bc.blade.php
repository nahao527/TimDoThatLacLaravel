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
                              <li class="breadcrumb-item active" aria-current="page">Chi tiết báo cáo</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">CHI TIẾT BÁO CÁO</h1> 
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
                                            <input type="text" placeholder="{{$ctToCao->tieu_de}}"
                                                class="form-control form-control-line" name="hoten">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Nội dung</label>
                                        <div class="col-md-12">
                                            <input type="email" placeholder="{{$ctToCao->noi_dung}}"
                                                class="form-control form-control-line" name="email"
                                                id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Hình ảnh</label>
                                        <div class="col-md-12">
                                            <img src="{{asset('images/'. $ctToCao->hinh_anh_1)}}" alt="" width="200">
                                            <img src="{{asset('images/'. $ctToCao->hinh_anh_2)}}" alt="" width="200">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <a href="{{route('show-chi-tiet-bv',['id'=>$ctToCao->bai_viet_to_cao_id])}}" class="btn btn-primary">Xem chi tiết bài viết này!</a>
                                            <a href="{{route('xoa-bai-viet-tc',['id'=>$ctToCao->bai_viet_to_cao_id])}}" class="btn btn btn-danger" onclick="confirmation(event)">Xóa bài viết này!</a>
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