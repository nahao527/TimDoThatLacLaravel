@extends('layouts.main-layouts-2')
@section('content')
<div class="col-lg-6">
                <div>
                    <nav aria-label="breadcrumb" class="mt-10">
                        <ol class="breadcrumb breadcrumb-right-arrow">
                            <li class="breadcrumb-item "><a href="/">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Chi tiết</li>
                        </ol>
                    </nav>
                    <div class="post-create">
                        <div class="advice">
                            <h6><i class="icofont-star"></i> Lựa chọn đăng tin ưu tiên để tiếp cận nhiều người hơn và có thể tìm lại đồ của mình nhanh chóng</h6>
                        </div>
                        <form action="{{route('xu-ly-dang-tin')}}" method="POST" enctype="multipart/form-data">
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
                                                <input type="text" class="form-control" placeholder="Tiêu đề" id="title" name="title" required>
                                            </div>
                                            <br>
                                            <div>
                                            @if(Auth::user()->adm == 1)
                                                @else
                                            <label for="post_type_select"><span class="required">* </span>Chọn loại tin bạn muốn đăng!</label>
                                                <br>
                                                <label style="margin-left: 16px">
                                                <input type="checkbox" class="radio" value="0" name="post_type_id_stt" /> Tin thường</label>
                                                <br>
                                                <label style="margin-left: 16px">
                                                <input type="checkbox" class="radio" value="1" name="post_type_id_stt" /> Tin ưu tiên</label>
                                                @endif
                                            </div>
                                            <br>
                                            <div>
                                            <label for="post_type_select"><span class="required">* </span>Loại tin:</label>
                                                <br>
                                                @if(Auth::user()->adm == 1)
                                                <label style="margin-left: 16px">
                                                <input type="checkbox" class="radio" value="Lừa đảo" name="post_type_id" /> Lừa đảo</label>
                                                @else
                                                <label style="margin-left: 16px">
                                                <input type="checkbox" class="radio" value="Mất đồ" name="post_type_id" />Tìm đồ</label>
                                                <br>
                                                <label style="margin-left: 16px">
                                                <input type="checkbox" class="radio" value="Nhặt đồ" name="post_type_id" /> Nhặt được</label>
                                                <br>
                                                <label style="margin-left: 16px">
                                                <input type="checkbox" class="radio" value="Thú cưng" name="post_type_id" /> Thất lạc thú cưng</label>
                                                <br>
                                                <label style="margin-left: 16px">
                                                <input type="checkbox" class="radio" value="Mất xe" name="post_type_id" /> Xe</label>
                                                @endif
                                            </div>
                                            <div>
                                            <br>
                                                <p><span class="font-bold">* Nhập loại đồ cần tìm:</span> <span class="text-red-500">Ví dụ: Ví, chứng minh, laptop ...vv</span> </p>
                                                <input type="text" id="location-text-box" name="theloai" class="form-control" value="">
                                                <br>
                                            </div>
                                            <div>
                                                <label for="phone_number"><span class="required">* </span>Số điện thoại :</label>
                                                <input name="phone_number" id="phone_number" type="number" class="form-control"/>
                                            </div>   
                                            <br>
                                            <br>
                                            <div>
                                                <label for="description">Mô tả:</label>
                                                <textarea class="form-control" name="description" id="description" cols="30" rows="10" required></textarea>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="comment">Thêm hình ảnh của bạn :</label>
                                                <div>
                                                    <input type="file" id="file1" name="images1">
                                                    <img src="" id="img1" class="img1" width="200px">
                                                    </div>
                                                    <div>
                                                    <input type="file" id="file2" name="images2">
                                                    <img src="" id="img2" class="img1" width="200px">
                                                    </div>
                                                    <div>
                                                    <input type="file" id="file3" name="images3">
                                                    <img src="" id="img3" class="img1" width="200px">
                                                    </div>
                                                    <div>
                                                    <input type="file" id="file3" name="images4">
                                                    <img src="" id="img3" class="img1" width="200px">
                                                    </div>
                                                    <div>
                                                    <input type="file" id="file3" name="images5">
                                                    <img src="" id="img3" class="img1"width="200px">
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
                                                    <input type="text" id="location-text-box" name="thanhpho" class="form-control" value="">
                                                </div>
                                                @if(Auth::user()->adm == 1)
                                                @else
                                                <div class="form-group">
                                                    <label for="location-text-box">Địa Điểm Rơi/Thất Lạc/ Nhặt Được:</label>
                                                    <label for="location-text-box">Vui lòng nhập địa chỉ cụ thể để có thể tìm dễ dàng hơn</label>
                                                    <input type="text" id="location-text-box" name="address" class="form-control" value="">
                                                </div>
                                                @endif
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