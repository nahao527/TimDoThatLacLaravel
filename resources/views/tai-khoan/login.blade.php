@extends('layouts.main-layouts')
@section('content')
<div class="d-flex justify-content-center">
@include('sweetalert::alert')
            <div class="signup">
                <div class="card border-0">
                    <div class="card-body">
                <form action="{{ route('xu-ly-dang-nhap') }}" method="post">
                    <h2 style="Text-align:center">ĐĂNG NHẬP TÀI KHOẢN</h2>
                    @csrf
                    <div>
                        <label>Tên tài khoản</label>
                        <input type="text" class="form-control" placeholder="Nhập tên tài khoản" name="ten_dang_nhap">
                        @error('ten_dang_nhap')
                                <div class="alert alert-danger">
                                    <li>{{ $message }}</li>
                                </div>
                                @enderror
                    </div>
                    <br>
                    <div>
                        <label>Mật khẩu</label>
                        <input type="password" class="form-control password" name="password" placeholder="Nhập mật khẩu">
                        @error('password')
                                <div class="alert alert-danger">
                                    <li>{{ $message }}</li>
                                </div>
                                @enderror
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success" style="margin-top: 20px;background-color: #4CAF50;">Đăng Nhập</button>
                    </div>
                    <div>
                        <p><input type="checkbox" name="remember_me"> Nhớ mật khẩu</p>
                    </div>
                    <div class="text-center">
                        <br>
                        <a href="{{route('show-dang-ky')}}">Nếu bạn chưa có tài khoản hãy đăng ký!</a>
                    </div>
                    <img src="{{asset('/images/logo.png')}}" width="200px">
                    <div class="text-right">
                    <strong>Giúp bạn tìm kiếm dễ dàng hơn!</strong>
                    </div>
                </form>
                    </div>
                </div>
            </div>
</div>
@endsection  