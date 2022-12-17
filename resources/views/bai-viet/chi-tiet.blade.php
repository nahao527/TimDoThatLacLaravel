@extends('layouts.main-layouts')
@section('content')
<div class="container">
@include('sweetalert::alert')
        <div class="row">
            <div class="post-detail">
                <div class="title font-weight-bold">
                    <h2>{{$ctBaiViet->tieu_de}}</h2>
                    <div class="d-flex align-items-end">
                        <div class="fb-share-button" data-layout="button_count">
                        </div>
                    </div>
                    <hr/>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                    <section class="splide" aria-label="Splide Basic HTML Example" style="margin-bottom: 24px">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <img src="{{asset('images/'.$ctBaiViet->hinh_anh_1)}}" style="max-height: 400px; width: 100%; object-fit: contain; border-radius: 8px" />
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{asset('images/'.$ctBaiViet->hinh_anh_2)}}" style="max-height: 400px; width: 100%; object-fit: contain; border-radius: 8px" />
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{asset('images/'.$ctBaiViet->hinh_anh_3)}}" style="max-height: 400px; width: 100%; object-fit: contain; border-radius: 8px" />
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{asset('images/'.$ctBaiViet->hinh_anh_4)}}" style="max-height: 400px; width: 100%; object-fit: contain; border-radius: 8px" />
                                    </li>
                                    <li class="splide__slide">
                                        <img src="{{asset('images/'.$ctBaiViet->hinh_anh_5)}}" style="max-height: 400px; width: 100%; object-fit: contain; border-radius: 8px" />
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                var len = $('.splide__list .splide__slide').length;
                                var isArrows = parseInt(len) > 1;
                                var splide = new Splide('.splide', {
                                    arrows: isArrows
                                });
                                splide.mount();
                            });
                        </script>
                    </div>
                    <div class="col-lg-6">
                        <div class="properties-content-area wow fadeInUp" data-wow-delay="200ms">
                            <div class="properties-content-info">
                                <div class="properties-location">
                                    <p><i class="icofont-location-pin"></i>{{$ctBaiViet->thanh_pho}}
                                     <span><span style="visibility: hidden;">---------------------------</span>
                                     @if(Auth::user())
                                        @if(Auth::user()->id == $ctBaiViet->nguoi_dung_id)
                                         @else
                                        <a href="{{route('luu-bai-viet', ['id' => $ctBaiViet->id])}}" class="btn btn-success">Theo dõi bài viết</a>
                                         @endif
                                    @endif
                                     </span>
                                    </p>
                                </div>
                                <div class="properties-location">
                                    <p>Loại đồ: {{$ctBaiViet->loai_do}}
                                    </p>
                                </div>
                                <h5>Tin : <span>{{$ctBaiViet->tag}}</span></h5>
                                <div>
                                    <p>{{$ctBaiViet->noi_dung}}</p>
                                </div>
                                <h4>Tên người dùng:  <span>{{$ctBaiViet->ten_nguoi_dung}}</span></h4>
                                </div>
                                <div class="user-avatar">
                                <a href="/person/1" class="user-avatar-image">
                                    <img src="https://0711.vn/storage/uploads/EUI8OJxrpSm2xHoATkwXSSxh91WdBwdiU2VPZzhC.jpeg" alt="Avatar" class="user-avatar-image-avatar">
                                </a>
                                <div class="user-avatar-text">
                                    <h6 style="color: #0d6aad">Support.0711vn</h6>
                                    <p>Admin hỗ trợ các bạn Tìm Đồ và Trả Đồ
                            Nếu cần Hỗ Trợ Khẩn Cấp bạn vui lòng gọi HOTLINE: 086.711.0711</p>
                                </div>
                            </div>
                            <div class="form-group">
                            <a class="btn btn-warning">SĐT: {{$ctBaiViet->so_dien_thoai}}</a>
                            @if(Auth::user())
                                @if(Auth::user()->id == $ctBaiViet->nguoi_dung_id)

                                @else
                                <a href="{{route('show-to-cao',['id'=>$ctBaiViet->id])}}" class="btn btn-danger">Tố cáo bài viết</a>
                                @endif
                            @endif
                            
                            </div>
                            
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-8">
                <div class="row">
                    <div class="comment-wrapper">
                        <div class="panel panel-info">
                            <div class="panel-heading" id="target-comment" style="padding: 8px">
                                Bình luận
                                <div style="display: none">
                                    <span class="user-id"></span>
                                    <span class="post-id"></span>
                                </div>
                                <div style="display: none" class="reply-for">
                                    Trả lời <span style="color: #00a65a">@Nguyen  Dat</span> <i class="icofont-ui-delete"></i>
                                </div>

                            </div>
                            <div class="panel-body" style="padding: 8px">
                                <textarea class="form-control comment-content" placeholder="write a comment..." rows="3"></textarea>
                                <br>
                                <a type="button" href="/login" class="btn btn-info pull-right create-comment">Đăng</a>
                                <div class="clearfix"></div>
                                <hr>
                                <ul class="media-list">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                </div>
            </div>
            </div>
            </div>
@endsection