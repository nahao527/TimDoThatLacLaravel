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
                              <li class="breadcrumb-item active" aria-current="page">Cảnh báo người dùng</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">CẢNH BÁO NGƯỜI DÙNG</h1> 
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
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2" method="post" action="{{route('xu-ly-canh-bao',['id'=>$BaiVietCB->id])}}">
                                @csrf
                                    <div class="form-group">
                                    <label for="post_type_select"><strong> Tiêu đề cảnh cáo</strong></label>
                                        <br>
                                        <div class="form-switch">
                                                
                                                <label style="margin-left: 16px">
                                                <input type="radio" class="form-check-input" checked="true" value="Ngôn ngữ nhạy cảm" name="rp_id_type" /> Ngôn ngữ nhạy cảm</label>
                                                <br>
                                                <label style="margin-left: 16px">
                                                <input type="radio" class="form-check-input" value="Hình ảnh có chứa yếu tố nhạy cảm" name="rp_id_type" /> Hình ảnh có chứa yếu tố nhạy cảm</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                                <label for="post_type_select"><strong> Yêu cầu chỉnh sửa</strong></label>
                                                <br>
                                                <label style="margin-left: 16px">
                                                <input type="radio" class="radio" value="Vui lòng chỉnh sửa nội dung bài viết phù hợp"  checked="true" name="rp_id_type_des" /> Vui lòng chỉnh sửa nội dung bài viết phù hợp</label>
                                                <br>
                                                <label style="margin-left: 16px">
                                                <input type="radio" class="radio" value="Vui lòng chỉnh sửa hình ảnh phù hợp" name="rp_id_type_des" /> Vui lòng chỉnh sửa hình ảnh phù hợp</label>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success btn-block" style=" margin-top: 20px; color: white">Cảnh báo</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
</div>
@endsection