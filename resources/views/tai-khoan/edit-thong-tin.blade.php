@extends('layouts.main-layouts')
@section('content')
<div class="row carousel-holder">
@include('sweetalert::alert')
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Thông tin tài khoản</h4>
                    </div>
                    <div class="card-body" style="margin-top: 25px;">
                        <form action="{{route('xl-cap-nhat-thong-tin-user',['id'=>Auth::user()->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div>
                                <label>Họ Tên:</label>
                                <input type="text" class="form-control" name="name" value="{{Auth::user()->ho_ten}}" >
                            </div>
                            @error('name')
                                <div class="alert alert-danger">
                                    <li>{{ $message }}</li>
                                </div>
                                @enderror
                            <br>
                            <div>
                                <label>Tên tài khoản:</label>
                                <input type="text" readonly="" class="form-control" placeholder="{{Auth::user()->ten_dang_nhap}}" name="username">
                            </div>
                            <br>
                            <div>
                                <label>Số điện thoại:</label>
                                <input type="text" class="form-control"  name="sodienthoai" value="{{Auth::user()->so_dien_thoai}}">
                            </div>
                            @error('sodienthoai')
                                <div class="alert alert-danger">
                                    <li>{{ $message }}</li>
                                </div>
                                @enderror
                            <br>
                            <div>
                                <label>Avatar:</label>
                                <input type="file" class="form-control " name="avatar">
                            </div>
                            <br>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success" style=" margin-top: 20px; padding: 10px 40px;">Sửa
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        @endsection