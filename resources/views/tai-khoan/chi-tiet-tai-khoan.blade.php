@extends('layouts.main-layouts')
@section('content')
<div class="container profile">
@include('sweetalert::alert')
        <div class="row">
            <div class="col-sm-3">
                <div class="text-center">
                    <img src="{{asset('images/'. Auth::user()->avatar)}}" class="avatar img-circle img-thumbnail" alt="avatar" width="150px">
                    <h6>{{Auth::user()->ho_ten}}</h6>
                    <a href="{{route('sua-thong-tin-user',['id'=>Auth::user()->id])}}"><i class="icofont-ui-edit">Chỉnh sửa</i></a>
                    <a href="{{route('show-doi-mat-khau', ['id' => Auth::user()->id])}}"><i class="icofont-ui-password">Đổi mật khẩu</i></a>
                </div>
                <br>
                <ul class="list-group">
                    <li class="list-group-item text-muted">Chức năng<i class="fa fa-dashboard fa-1x"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Tìm đồ</strong></span> 0
                    </li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Nhặt đồ</strong></span> 0
                    </li>



                </ul>
                <br>
                <div class="card border-0">
                    <div class="card-body">
                        Social Media
                        <a href="#"><i class="icofont-facebook"></i></a>
                        <a href="#"><i class="icofont-twitter"></i></a>
                        <a href="#"><i class="icofont-instagram"></i></a>
                        <a href="#"><i class="icofont-ui-email"></i></a>
                    </div>
                </div>
                <br>
                <div class="card border-0 mb-4">
                    <a href="{{route('logout')}}">
                        <button  type="button" class="btn btn-warning" style="color: white;width: 100%">Đăng xuất</button>
                    </a>
                </div>
            </div>
            <div class="col-sm-9">
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Đã duyệt</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Chưa duyệt</a>
                        <a class="nav-item nav-link" id="nav-profile-tab2" data-toggle="tab" href="#nav-profile2" role="tab" aria-controls="nav-profile2" aria-selected="false">Bài viết đang theo dõi</a>


                    </div>
                </nav>
                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div>
                            <div class="container">
                                <div class="row">
                                <table class="table">
                                
                                <thead>
                                    <tr>
                                    <th scope="col">Tiêu đề</th>
                                    <th scope="col">Nội dung</th>
                                    <th scope="col">Chức năng</th>
                                    </tr>
                                </thead>
                                @foreach($listBaiViet as $BaiViet) 
                                <tbody>
                                    <tr>
                                    <td style="width: 250px;">{{$BaiViet->tieu_de}}</td>
                                    <td>{{$BaiViet->noi_dung}}</td>
                                    
                                    <td style="width: 100px;"><a href="{{route('xoa-bai-viet-cn',['id'=>$BaiViet->id])}}" class="btn btn-danger" onclick="confirmation(event)">Xóa bài viết</a>
                                    <a href="{{route('show-chi-tiet-bv',['id'=>$BaiViet->id])}}" class="btn btn-info">Xem bài viết</a>
                                    @if($BaiViet->tag == "Mất đồ")
                                    <a href="{{route('danh-dau-da-nhan', ['id' => $BaiViet->id])}}" class="btn btn-success">Đã nhận được</a>
                                    @elseif($BaiViet->tag == "Nhặt đồ")
                                    <a href="{{route('danh-dau-da-nhan', ['id' => $BaiViet->id])}}" class="btn btn-success">Đã trả đồ</a>
                                    @endif
                                </td>
                                    </tr>
                                </tbody>
                                @endforeach
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div>
                            <div class="container">
                                <div class="row">
                                <table class="table">
                                
                                <thead>
                                    <tr>
                                    <th scope="col">Tiêu đề</th>
                                    <th scope="col">Nội dung</th>
                                    <th scope="col">Chức năng</th>
                                    </tr>
                                </thead>
                                @foreach($listBaiVietcd as $BaiViet) 
                                <tbody>
                                    <tr>
                                    <td style="width: 250px;">{{$BaiViet->tieu_de}}</td>
                                    <td>{{$BaiViet->noi_dung}}</td>
                                    <td style="width: 100px;" ><a href="{{route('show-sua-bai-viet',['id'=>$BaiViet->id])}}" class="btn btn-success">Sửa bài viết</a><a href="{{route('xoa-bai-viet-cn',['id'=>$BaiViet->id])}}" class="btn btn-danger" onclick="confirmation(event)">Xóa bài viết</a></td>
                                    </tr>
                                </tbody>
                                @endforeach
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile2" role="tabpanel" aria-labelledby="nav-profile-tab2">
                        <div>
                            <div class="container">
                                <div class="row">
                                <table class="table">
                                
                                <thead>
                                    <tr>
                                    <th scope="col">Tiêu đề</th>
                                    <th scope="col">Nội dung</th>
                                    <th scope="col">Chức năng</th>
                                    </tr>
                                </thead>
                                @foreach($baiVietluu as $TheoDoiBaiViet) 
                                <tbody>
                                    <tr>
                                    <td style="width: 250px;">{{$TheoDoiBaiViet->tieu_de}}</td>
                                    <td>{{$TheoDoiBaiViet->noi_dung}}</td>
                                    <td style="width: 100px;" ><a href="{{route('show-chi-tiet-bv',['id'=>$BaiViet->id])}}" class="btn btn-info">Xem bài viết</a><a href="{{route('bo-luu-bai-viet', ['id' => $TheoDoiBaiViet->id])}}" class="btn btn-danger" onclick="confirmation(event)">Bỏ theo dõi</a></td>
                                    </tr>
                                </tbody>
                                @endforeach
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
    @endsection