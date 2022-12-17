@extends('layouts.main-layouts')
@section('content')
<div class="d-flex justify-content-center">
@include('sweetalert::alert')
            <div class="signup">
                <div class="card border-0">
                    <div class="card-body">
                        <form action="{{route('them-moi-tai-khoan')}}" method="POST">
                            <h2 style="Text-align:center">ĐĂNG KÝ TÀI KHOẢN</h2>
                        @csrf
                            <div>
                                <label>Họ và tên (*):</label>
                                <input type="text" class="form-control" placeholder="Nhập họ và tên của bạn" name="hoten">
                                @error('hoten')
                                <div class="alert alert-danger">
                                    <li>{{ $message }}</li>
                                </div>
                                @enderror
                            </div>
                            <br>
                            <div>
                                <label>Số điện thoại (*):</label>
                                <input type="text" class="form-control" placeholder="Nhập số điện thoại của bạn" name="sodienthoai">
                                @error('sodienthoai')
                                <div class="alert alert-danger">
                                    <li>{{ $message }}</li>
                                </div>
                                @enderror
                            </div>
                            <br>
                            <div>
                                <label>Nhập email của bạn (*):</label>
                                <input type="email" class="form-control" placeholder="Nhập email của bạn" name="email">
                                @error('email')
                                <div class="alert alert-danger">
                                    <li>{{ $message }}</li>
                                </div>
                                @enderror
                            </div>
                            <br>
                            <div>
                                <label>Tên tài khoản (*):</label>
                                <input type="text" class="form-control" placeholder="Nhập tên tài khoản" name="username">
                                @error('username')
                                <div class="alert alert-danger">
                                    <li>{{ $message }}</li>
                                </div>
                                @enderror
                            </div>
                            <br>
                            <div>
                                <label>Mật khẩu (*):</label>
                                <input type="password" class="form-control password" name="password" placeholder="Nhập mật khẩu">
                                @error('password')
                                <div class="alert alert-danger">
                                    <li>{{ $message }}</li>
                                </div>
                                @enderror
                            </div>
                            <br>
                            <div>
                                <label>Nhập Lại Mật khẩu (*):</label>
                                <input type="password" class="form-control password" name="re_password" placeholder="Nhập lại mật khẩu">
                                @error('re_password')
                                <div class="alert alert-danger">
                                    <li>{{ $message }}</li>
                                </div>
                                @enderror
                            </div>
                            <br>
                            <p style="color: red">(*) Bắt buộc</p>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success" style="margin-top: 20px;background-color: #4CAF50;">Đăng Kí
                                </button>

                            </div>
                        </form>
                        </div>
                </div>
            </div>
        </div>
        @endsection       