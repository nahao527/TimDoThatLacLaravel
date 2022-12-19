
@extends('layouts.main-layouts-2')
@section('content')
<div class="col-lg-9">
@include('sweetalert::alert')
                <div>
                    <div class="row">
                    @foreach($dsBaiVietUuTien as $BaiViet)
                        <div class="col-md-4">
                        <a href="{{route('show-chi-tiet-bv',['id'=>$BaiViet->id])}}">
                            <div style="cursor: pointer; background-color: white; border-radius: 8px">
                               
                                <div class="single-property-area wow fadeInUp" data-wow-delay="200ms">
                                
                                    <div class="property-thumb" style="height: 165px !important;">
                                        <img src="{{asset('images/'.$BaiViet->hinh_anh_1)}}" alt="" style="height: 100%">
                                        <div class="priority-post">
                                        <span>Tin ưu tiên</span>
                                    </div>
                                    </div>
                                    
                                    <div class="d-flex flex-column" style="padding: 8px">
                                        <h6 style="
                                    display: -webkit-box;
                                    -webkit-line-clamp: 2;
                                    -webkit-box-orient: vertical;
                                    overflow: hidden;
                                    text-overflow: Ellipsis;
                                    max-height: 44px;
                                    margin: 5px 0px 10px;
                                    ">{{$BaiViet->tieu_de}}</h6>
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <i class="icofont-location-pin"></i><span style="font-size: 12px">{{$BaiViet->thanh_pho}}</span>
                                            </div>
                                            <div>
                                                <img src="https://www.0711.vn/storage/default/icon/posttype/pet.png" width="14" height="14"><span style="font-size: 12px">{{$BaiViet->tag}}</span>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                                
                            </div>

                            </a>
                        </div>

                        
                        @endforeach
                        @foreach($dsBaiViet as $BaiViet)
                        <div class="col-md-4">
                        <a href="{{route('show-chi-tiet-bv',['id'=>$BaiViet->id])}}">
                            <div style="cursor: pointer; background-color: white; border-radius: 8px">
                               
                                <div class="single-property-area wow fadeInUp" data-wow-delay="200ms">
                                
                                    <div class="property-thumb" style="height: 165px !important;">
                                        <img src="{{asset('images/'.$BaiViet->hinh_anh_1)}}" alt="" style="height: 100%">
                                        
                                    </div>
                                    
                                    <div class="d-flex flex-column" style="padding: 8px">
                                        <h6 style="
                                    display: -webkit-box;
                                    -webkit-line-clamp: 2;
                                    -webkit-box-orient: vertical;
                                    overflow: hidden;
                                    text-overflow: Ellipsis;
                                    max-height: 44px;
                                    margin: 5px 0px 10px;
                                    ">{{$BaiViet->tieu_de}}</h6>
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <i class="icofont-location-pin"></i><span style="font-size: 12px">{{$BaiViet->thanh_pho}}</span>
                                            </div>
                                            <div>
                                                <img src="https://www.0711.vn/storage/default/icon/posttype/pet.png" width="14" height="14"><span style="font-size: 12px">{{$BaiViet->tag}}</span>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                                
                            </div>

                            </a>
                        </div>

                        
                        @endforeach
                    </div>
                    
</div>
@endsection