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
                              <li class="breadcrumb-item active" aria-current="page">Bài viết</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Quản lý bài viết</h1> 
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
                                        class="m-r-5 font-18 mdi mdi-numeric-1-box-multiple-outline"></i>DANH SÁCH BÀI VIẾT</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                                <th scope="col">ID</th>
                                                <th scope="col">ID người báo cáo</th>
                                                <th scope="col">Ảnh</th>
                                                <th scope="col">ID bài viết</th>
                                                <th scope="col">Tiêu đề</th>
                                                <th scope="col">Nội dung báo cáo</th>
                                                <th scope="col">Chức năng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($dsToCao as $ToCao)
                                            <tr> 
                                                <td>{{$ToCao->id}}</td>
                                                <td>{{$ToCao->nguoi_to_cao_id}}</td>
                                                <td>Không có</td>
                                                <td>{{$ToCao->bai_viet_to_cao_id}}</td>
                                                <td>{{$ToCao->tieu_de}}</td>
                                                <td>{{$ToCao->noi_dung}}</td>
                                                <td>
                                                <button style="background-color: red; width:120px;border-radius: 4px"><a href="{{route('xoa-bai-tc',['id'=>$ToCao->id])}}" style="color:white" onclick="confirmation(event)">Xóa Báo Cáo</button>
                                                <button style="background-color: green; width:100px;border-radius: 4px"><a href="{{route('show-ct-tc',['id'=>$ToCao->id])}}"  style="color:white">Xem chi tiết</button></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>  
                            </div>
                        </div>   
                    </div> 
                </div>
            </div>
</div>
@endsection 