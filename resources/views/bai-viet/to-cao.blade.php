@extends('layouts.main-layouts-2')
@section('content')
<div class="col-lg-6">
                <div>
                    <nav aria-label="breadcrumb" class="mt-10">
                        <ol class="breadcrumb breadcrumb-right-arrow">
                            <li class="breadcrumb-item "><a href="/">Bài Viết</a></li>
                            <li class="breadcrumb-item active">Tố Cáo</li>
                        </ol>
                    </nav>
                    <div class="post-create">
                        <div class="advice">
                            <h4 style="color: black; font-style:normal">Bài viết bị tố cáo</h4>
                            <h5><i class=""></i>{{$tcBaiViet->tieu_de}}</h5>
                            
                        </div>
                        <form action="{{route('xu-ly-bao-cao',['id'=>$tcBaiViet->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card post-create-information border-0">
                                        <div class="card-header border-0" style="background-color: #f2f1eb">
                                            <h4 style="text-align: center">TỐ CÁO</h4>
                                        </div>
                                        <div class="card-body" style="margin-top: 25px; padding: 10px;">
                                            <div>
                                                <label for="post_type_select"><span class="required">* </span>Tiêu đề báo cáo</label>
                                                <br>
                                                <label style="margin-left: 16px">
                                                <input type="checkbox" class="radio" value="Lừa đảo" name="rp_id_type" /> Lừa đảo</label>
                                                <br>
                                                <label style="margin-left: 16px">
                                                <input type="checkbox" class="radio" value="Giả mạo, lạm dụng" name="rp_id_type" /> Giả mạo, lạm dụng</label>
                                            </div>
                                            <br>
                                            <div>
                                                <label for="description">Nội dung báo cáo: </label>
                                                <textarea class="form-control" name="description" id="description" cols="30" rows="10">

                                    </textarea>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="comment">Thêm ảnh minh họa: </label>
                                                <div class="file-loading">
                                                <input type="file" name="images1" class="form-control">
                                                <input type="file" name="images2" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-danger btn-block" style=" margin-top: 20px; ">Tố Cáo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endsection