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
                                            <tr>
                                                <th scope="col">Duyệt</th>
                                                <th scope="col">ID</th>
                                                <th scope="col">Tên người dùng</th>
                                                <th scope="col">Hình ảnh</th>
                                                <th scope="col">Tiêu đề</th>
                                                <th scope="col">Nội dung</th>
                                                <th scope="col">Tag</th>
                                                <th scope="col">Vị trí</th>
                                                <th scope="col">Chức Năng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($dsBaiVietCanDuyet as $BaiViet)
                                            <tr> 
                                            <td><button style="background-color: green; border-radius: 4px"><a href="{{route('duyet-bai',['id'=>$BaiViet->id])}}" style="color:white">Duyệt</button></td>
                                                <td>{{$BaiViet->id}}</td>
                                                <td>{{$BaiViet->ten_nguoi_dung}}</td>
                                                <td><img src="{{asset('images/'. $BaiViet->hinh_anh_1)}}" alt="" width="70"></td>
                                                <td>{{$BaiViet->tieu_de}}</td>
                                                <td>{{$BaiViet->noi_dung}}</td>
                                                <td>{{$BaiViet->tag}}</td>
                                                <td>{{$BaiViet->vi_tri}}</td>
                                                
                                                <td>
                                                <button style="background-color: red; width:100px;border-radius: 4px"><a href="{{route('xoa-bai-viet',['id'=>$BaiViet->id])}}" style="color:white" onclick="confirmation(event)">Xóa bài</button>
                                                <button style="background-color: yellow; width:100px;border-radius: 4px"><a href="{{route('show-canh-bao',['id'=>$BaiViet->id])}})}}" style="color:black">Cảnh báo</button>
                                                <button style="background-color: green; width:100px;border-radius: 4px"><a href="{{route('show-ct-bai-viet',['id'=>$BaiViet->id])}})}}" style="color:white">Xem chi tiết</button></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{$dsBaiVietCanDuyet->links()}}
                        </div>   
                    </div> 
                </div>
            </div>
</div>
@endsection 