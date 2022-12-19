@extends('layouts.main-layouts-2')
@section('content')
<div class="col-lg-6">
@include('sweetalert::alert')
                <div>
                    <div class="post-create">
                        <div class="advice">
                            <h6><i class="icofont-star"></i>Sửa bài viết - lưu ý bài viết chỉ có thể sửa khi chưa được duyệt</h6>
                        </div>
                        <form action="{{route('xl-sua-bai-viet',['id'=>$SuaBaiViet->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card post-create-information border-0">
                                        <div class="card-header border-0" style="background-color: #f2f1eb">
                                            <h4 style="text-align: center">Thông tin</h4>
                                        </div>
                                        <div class="card-body" style="margin-top: 25px; padding: 10px;">
                                            <div>
                                                <label for="title"><span class="required">* </span>Tiêu đề bài đăng :</label>
                                                <input type="text" class="form-control" value="{{$SuaBaiViet->tieu_de}}" id="title" name="title" required>
                                            </div>
                                            <br>
                                            <div>
                                            <label for="post_type_select"><span class="required">* </span>Loại tin :</label>
                                                <br>
                                                @if(Auth::user()->adm == 1)
                                                @if($SuaBaiViet->tag == 'Lừa đảo')
                                                <label style="margin-left: 16px">
                                                <input type="checkbox" class="radio" value="Lừa đảo" name="post_type_id" checked="true" /> Lừa đảo</label>
                                                @else
                                                <label style="margin-left: 16px">
                                                <input type="checkbox" class="radio" value="Lừa đảo" name="post_type_id"/> Lừa đảo</label>
                                                @endif
                                                @else
                                                @if($SuaBaiViet->tag == 'Mất đồ')
                                                <label style="margin-left: 16px">
                                                <input type="checkbox" class="radio" value="Mất đồ" name="post_type_id" checked="true" />Tìm đồ</label>
                                                @else
                                                <label style="margin-left: 16px">
                                                <input type="checkbox" class="radio" value="Mất đồ" name="post_type_id"/>Tìm đồ</label>
                                                @endif
                                                <br>
                                                @if($SuaBaiViet->tag == 'Nhặt đồ')
                                                <label style="margin-left: 16px">
                                                <input type="checkbox" class="radio" value="Nhặt đồ" name="post_type_id" checked="true" /> Nhặt được</label>
                                                @else
                                                <label style="margin-left: 16px">
                                                <input type="checkbox" class="radio" value="Nhặt đồ" name="post_type_id" /> Nhặt được</label>
                                                @endif
                                                <br>
                                                @if($SuaBaiViet->tag == 'Thú cưng')
                                                <label style="margin-left: 16px">
                                                <input type="checkbox" class="radio" value="Thú cưng" name="post_type_id" checked="true" /> Thất lạc thú cưng</label>
                                                @else
                                                <label style="margin-left: 16px">
                                                <input type="checkbox" class="radio" value="Thú cưng" name="post_type_id" /> Thất lạc thú cưng</label>
                                                @endif
                                                <br>
                                                @if($SuaBaiViet->tag == 'Mất xe')
                                                <label style="margin-left: 16px">
                                                <input type="checkbox" class="radio" value="Mất xe" name="post_type_id" checked="true"/> Xe</label>
                                                @else
                                                <label style="margin-left: 16px">
                                                <input type="checkbox" class="radio" value="Mất xe" name="post_type_id" /> Xe</label>
                                                @endif
                                                @endif
                                            </div>
                                            <br>
                                            <div>
                                            <br>
                                                <p><span class="font-bold">* Nhập loại đồ cần tìm:</span> <span class="text-red-500">Ví dụ: Ví, chứng minh, laptop ...vv</span> </p>
                                                <input type="text" id="location-text-box" name="theloai" class="form-control" value="{{$SuaBaiViet->loai_do}}">
                                                <br>
                                            </div>
                                            <div>
                                                <label for="phone_number"><span class="required">* </span>Số điện thoại :</label>
                                                <input name="phone_number" id="phone_number" type="number" class="form-control" value="{{$SuaBaiViet->so_dien_thoai}}"/>
                                            </div>    
                                            <br>
                                            <br>
                                            <div>
                                                <label for="description">Mô tả:</label>
                                                <textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="{{$SuaBaiViet->noi_dung}}" required></textarea>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="comment">Thêm hình ảnh của bạn :</label>
                                                <div class="file-loading">
                                                <input type="file" name="images1" class="form-control">
                                                <input type="file" name="images2" class="form-control">
                                                <input type="file" name="images3" class="form-control">
                                                <input type="file" name="images4" class="form-control">
                                                <input type="file" name="images5" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card post-create-address border-0">
                                        <div class="card-header border-0" style="background-color: #f2f1eb">
                                            <h4 style="text-align: center">Địa chỉ</h4>
                                        </div>
                                        <div class="card-body" style="margin-top: 25px; padding: 10px;">
                                            <div class="panel-body">
                                            <div class="form-group">
                                                    <label for="location-text-box">Thành phố:</label>
                                                    <input type="text" id="location-text-box" name="thanhpho" class="form-control" value="{{$SuaBaiViet->thanh_pho}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="location-text-box">Địa Điểm Rơi/Thất Lạc/ Nhặt Được :</label>
                                                    <label for="location-text-box">Vui lòng nhập địa chỉ cụ thể để có thể tìm dễ dàng hơn</label>
                                                    <input type="text" id="location-text-box" name="address" class="form-control" value="" placeholder="{{$SuaBaiViet->vi_tri}}">
                                                </div>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success btn-block" style=" margin-top: 20px; ">Đăng tin
                    </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endsection