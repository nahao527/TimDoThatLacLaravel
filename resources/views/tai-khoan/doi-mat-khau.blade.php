@extends('layouts.main-layouts')
@section('content')
<div class="row carousel-holder">
@include('sweetalert::alert')
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Đặt lại mật khẩu</h4>
                    </div>
                    <div class="card-body" style="margin-top: 25px;">
                        <form action="{{route('xl-doi-mat-khau',['id' => Auth::user()->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div>
                                <label>Mật khẩu cũ:</label>
                                <input type="password" class="form-control password" name="password_old">
                            </div>
                            @error('password_old')
                                <div class="alert alert-danger">
                                    <li>{{ $message }}</li>
                                </div>
                                @enderror
                            <br/>
                            <div>
                                <label>Đặt lại mật khẩu:</label>
                                <input type="password" class="form-control password" name="password_new">
                            </div>
                            @error('password_new')
                                <div class="alert alert-danger">
                                    <li>{{ $message }}</li>
                                </div>
                                @enderror
                            <br>
                            <div>
                                <label>Nhập lại mật khẩu:</label>
                                <input type="password" class="form-control password" name="password_re">
                            </div>
                            @error('password_re')
                                <div class="alert alert-danger">
                                    <li>{{ $message }}</li>
                                </div>
                                @enderror
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
        <br>
        <br>
        <br>
        <br>
        
        @endsection