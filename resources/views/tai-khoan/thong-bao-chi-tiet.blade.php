@extends('layouts.main-layouts')
@section('content')
<div class="row">
                    <!-- Column -->
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                        <label class="col-md-12"><h2>Cảnh báo bài viết</h2></label>
                                        <div class="col-md-12">
                                            <strong>Bài viết {{$ctThongBao->tieu_de_post}}</strong>
                                            
                                            <p>{{$ctThongBao->tieu_de}}</p>
                                            <p>{{$ctThongBao->noi_dung}}</p>
                                            @if($ctThongBao->tieu_de == 'Bài viết của bạn đã bị xóa!')
                                            <a href="{{route('show-trang-chu')}}" class="btn btn-success">Trở về trang chủ</a>
                                            @else
                                            <a href="{{route('show-sua-bai-viet',['id'=>$ctThongBao->bai_viet_id])}}" class="btn btn-danger">Chỉnh sửa bài viết</a>
                                            @endif
                                        </div>
                                        <br>
                                        <br>
                                    </div>
                                        
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
@endsection