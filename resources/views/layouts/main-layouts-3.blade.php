<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="vkL2KhzPnlWDCDsadtoaXijf2kdpi4VKu2i89e3D">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Title -->
    <title>TIMDOTHATLAC.PRO - Tìm đồ dễ dàng!</title>
    <meta name="description" content="Tìm là thấy - Không Lo Thất Lạc. Ứng dụng tìm kiếm đồ đạc,ví tiền,xe cộ, thú cưng thất lạc tốt nhất">

    <!-- Favicon -->
    <link rel="icon" href="https://0711.vn/assets/images/favicon.png">
    <link rel="stylesheet" href="https://0711.vn/css/style.css?v=7">
    <link rel="stylesheet" href="https://0711.vn/vendor/bootrap_select/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://0711.vn/vendor/filepond/filepond.css">
    <link rel="stylesheet" href="https://0711.vn/vendor/filepond/filepond-plugin-image-preview.css">
    <link rel="stylesheet" href="https://0711.vn/vendor/splide-4.0.7/dist/css/splide.min.css">



    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-168012015-1"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-168012015-1');
    </script>

    <!-- This site is converting visitors into subscribers and customers with respond.io - https://respond.io -->
    <!-- https://respond.io/ -->





</head>

<body style="background-color:#f2f3f5;">
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v7.0'
            });

            FB.Event.subscribe('customerchat.show', function() {
                console.log('customerchat.show');
                $('.close-mess').show();
            });

            FB.Event.subscribe('customerchat.load', function() {
                $('.close-mess').show();
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat" attribution=install_email page_id="100292381455476" theme_color="#ff7e29" logged_in_greeting="Xin chào, chúng tôi sẽ hỗ trợ bạn tìm đồ." logged_out_greeting="Xin chào, chúng tôi sẽ hỗ trợ bạn tìm đồ.">
    </div>
    <div id="popup">
        <div class="popup__overlay"></div>
        <div class="popup__container">
            <a>
                <img  src="https://0711.vn/assets/images/banner_popup.png" alt="home_popup_banner">
            </a>
            <div class="popup__close-btn">
                <svg class="popup-svg-icon " enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0" y="0">
                    <path d="m10.7 9.2-3.8-3.8 3.8-3.7c.4-.4.4-1 0-1.4-.4-.4-1-.4-1.4 0l-3.8 3.7-3.8-3.7c-.4-.4-1-.4-1.4 0-.4.4-.4 1 0 1.4l3.8 3.7-3.8 3.8c-.4.4-.4 1 0 1.4.2.2.5.3.7.3.3 0 .5-.1.7-.3l3.8-3.8 3.8 3.8c.2.2.4.3.7.3s.5-.1.7-.3c.4-.4.4-1 0-1.4z"></path>
                </svg>
            </div>
        </div>
    </div>
    <div id="preloader-wrapper">
        <div class="lds-hourglass"></div>
    </div>

    <div class="left-float-ads">

    </div>

    <div class="right-float-ads">

    </div>



    <header id="header">
        <div class="container d-flex">
            <div class="logo mr-auto">
                <a href="{{route('show-trang-chu')}}"><img src="{{ asset('/images/logo.png') }}" alt="" style="width: 220px"></a>
            </div>
            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="{{route('show-about-us')}}">Giới thiệu</a></li>
                    <li><a href="{{route('show-nhat-do')}}">Nhặt được</a></li>
                    <li><a href="{{route('show-tips')}}">Mẹo tìm đồ</a></li>
                    <li><a href="{{route('show-dang-tin')}}" style="color: red">Đăng tin</a></li>
                    @if(Auth::user())
                    <li><a href="{{route('thong-tin-user',['id'=> Auth::user()->id])}}">{{Auth::user()->ho_ten}}</a></li>
                    @else
                    <li><a href="{{route('show-dang-nhap')}}">Đăng nhập</a></li>
                    @endif
                </ul>
            </nav>
        </div>
    </header>

    <style>
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 99;
            top: 0;
            right: 0;
            background-color: white;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        /* .sidenav a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 25px;
      color: #818181;
      display: block;
      transition: 0.3s;
    } */

        /* .sidenav a:hover {
      color: #f1f1f1;
    } */

        .sidenav .closeNavBtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        /* @media  screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    } */

        .tab-pane ul {
            display: flex;
            flex-wrap: wrap;
            list-style-type: none;
            padding-left: 0px;
        }

        .tab-pane ul li {
            margin-right: 15px;
            /* width: calc(50% - 7.5px); */
        }

        .tab-pane ul li a {
            align-items: center;
            background: #f8f9fa !important;
            border: none;
            border-radius: 5px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
            display: flex;
            flex-wrap: wrap;
            font-size: 14px;
            font-weight: 600;
            justify-content: flex-start;
            margin-bottom: 10px;
            padding: 15px 10px;
            text-align: center;
            white-space: nowrap;
            width: 100%;
            color: #333;
        }
    </style>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closeNavBtn">&times;</a>
        <nav>
            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-menu-tab" data-toggle="tab" href="#nav-menu" role="tab" aria-controls="nav-menu" aria-selected="true">Menu</a>
                <a class="nav-item nav-link" id="nav-notification-tab" data-toggle="tab" href="#nav-notification" role="tab" aria-controls="nav-notification" aria-selected="false">Thông báo</a>
                <a class="nav-item nav-link" id="nav-account-tab" data-toggle="tab" href="#nav-account" role="tab" aria-controls="nav-account" aria-selected="false">Tài khoản</a>
            </div>
        </nav>
        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-menu" role="tabpanel" aria-labelledby="nav-menu-tab">
                <ul>
                <li>
                        <a class="navigation-post-new" rel="dofollow" href="{{route('show-dang-tin')}}">
                        <i class="icofont-upload-alt"></i>
                        &nbsp;
                        Đăng tin
                    </a>
                    </li>
                    <li>
                        <a rel="dofollow" href="{{route('show-mat-do')}}">
                        <i class="icofont-confounded"></i>
                        &nbsp;
                        Mất đồ
                    </a>
                    </li>
                    <li>
                        <a rel="dofollow" href="{{route('show-nhat-do')}}">
                        <i class="icofont-gift"></i>
                        &nbsp;
                        Nhặt được
                    </a>
                    </li>
                    <li>
                        <a rel="dofollow" href="{{route('show-thu-cung')}}">
                        <i class="fas fa-cat"></i>
                        &nbsp;
                        Tìm thú cưng
                    </a>
                    </li>
                    <li>
                        <a rel="dofollow" href="{{route('show-xe-may')}}">
                        <i class="fas fa-motorcycle"></i>
                        &nbsp;
                        Tìm xe cộ
                    </a>
                    </li>
                    <li>
                        <a rel="dofollow" href="/post/type/3">
                        <i class="fas fa-address-card"></i>
                        &nbsp;
                        Danh sách lừa đảo
                    </a>
                    </li>
                    <li>
                        <a rel="dofollow" href="/tips">
                        <i class="fas fa-cookie"></i>
                        &nbsp;
                        Mẹo tìm đồ
                    </a>
                    </li>
                    <li>
                        <a rel="dofollow" href="/about-us">
                        <i class="fas fa-user icon"></i>
                        &nbsp;
                        Giới thiệu
                    </a>
                    </li>
                    <li>
                        <a rel="dofollow" href="#">
                        <i class="fas fa-dollar-sign"></i>
                        &nbsp;
                        Ủng hộ dự án
                    </a>
                    </li>
                </ul>
            </div>
            <div class="tab-pane fade" id="nav-notification" role="tabpanel" aria-labelledby="nav-notification-tab">
                Không có thông báo nào.
            </div>
            <div class="tab-pane fade" id="nav-account" role="tabpanel" aria-labelledby="nav-account-tab">
                <ul>
                    <li>
                        <a rel="dofollow" href="/login">
                            <i class="fas fa-sign-in-alt"></i>
                            &nbsp;
                            Đăng nhập
                        </a>
                    </li>
                    <li>
                        <a rel="dofollow" href="/signup">
                            <i class="fas fa-user-plus"></i>
                            &nbsp;
                            Đăng ký
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    @yield('content')
    

    <script src="https://0711.vn/js/app.js?v=7"></script>
    <script src="https://0711.vn/vendor/bootrap_select/bootstrap-select.min.js"></script>
    <script src="https://0711.vn/vendor/filepond/filepond-plugin-image-preview.js"></script>
    <script src="https://0711.vn/vendor/filepond/filepond.js"></script>
    <script src="https://0711.vn/vendor/filepond/filepond-plugin-file-encode.js"></script>
    <script src="https://0711.vn/vendor/filepond/filepond-plugin-file-rename.min.js"></script>
    <script src="https://0711.vn/vendor/ckeditor/ckeditor.js"></script>
    <script src="https://0711.vn/vendor/splide-4.0.7/dist/js/splide.min.js"></script>
    <script>
        if ($(window).width() <= 720) {
            $('.hurry-post').removeClass('d-flex flex-row flex-nowrap');
        } else {
            $('.hurry-post').addClass('d-flex flex-row flex-nowrap')
        }
        $(window).resize(function() {
            if ($(window).width() <= 720) {
                $('.hurry-post').removeClass('d-flex flex-row flex-nowrap');
            } else {
                $('.hurry-post').addClass('d-flex flex-row flex-nowrap')
            }
        });
    </script>

    <footer class="footer-area bg-img bg-overlay-2 section-padding-100-0" style="background-image: url(https://0711.vn/assets/images/17.jpg);">
        <!-- Main Footer Area -->

        <div class="zalo">
            <!--
        <div class="zalo-chat-widget" data-oaid="579745863508352884" data-welcome-message="Rất vui khi được hỗ trợ bạn!" data-autopopup="0" data-width="350" data-height="420" ></div>
        <script src="https://sp.zalo.me/plugins/sdk.js"></script>
        -->
            <a href="https://zalo.me/0867110711">
                <div class="zalo-chat-widget">
                    <img class="rounded" alt="" src="https://0711.vn/assets/services/driver-license/zalo.png" width="64px" height="64px" />
                    <div class="close-container close-zalo">
                        <div class="leftright"></div>
                        <div class="rightleft"></div>
                    </div>
                </div>

            </a>
        </div>
        <!--
    <div class="btn-call">
        <a href="tel:0867110711">
            <div class="blob"><i class="icofont-mobile-phone"></i></div>
            <span>Hỗ trợ : 086.711.0711</span>
            <div class="close-container close-phone">
                <div class="leftright"></div>
                <div class="rightleft"></div>
            </div>
        </a>
    </div>
    -->
        <div class="main-footer-area">
            <div class="container">

                <div class="row justify-content-between">
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-80">
                            <!-- Footer Logo -->
                            <a href="#" class="footer-logo"><img src="{{asset('images/logolight.png')}}" alt="" style="margin-left: -30px; height: 120px; width:300px"></a>
                            <p>Tìm là thấy
                            </p>
                            <!-- Social Info -->
                            <div class="social-info">
                                <a href="#"><i class="icofont-facebook"></i></a>
                                <a href="#"><i class="icofont-twitter"></i></a>
                                <a href="#"><i class="icofont-instagram"></i></a>
                                <a href="#"><i class="icofont-ui-email"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">thông tin</h5>

                            <!-- Contact Area -->
                            <div class="footer-contact">
                                <p>Phone: <span>0345.523.272</span></p>
                                <p>Email: <span>hotro.timdothatlac@gmail.com</span></p>
                                <p>Address: <span>TP. Hồ Chí Minh</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">thành phố</h5>

                            <!-- Footer Nav -->
                            <ul class="footer-nav d-flex flex-wrap">
                                <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Hà nội</a></li>
                                <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Hồ chí minh</a></li>
                                <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Đà nẵng</a></li>
                                <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Hải phòng</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->













                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-content">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-sm-6">
                        <div class="copywrite-text">
                            <p>
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> 0711 <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="" target="_blank">heart</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top">
    <i class="icofont-simple-up"></i>
</a>
    <div class="close-mess">
        <div class="leftright"></div>
        <div class="rightleft"></div>
    </div>

    <script>
        $('.close-container').on('click', function(e) {
            e.stopPropagation();
            e.preventDefault();
            $(this).parent().hide()
        })

        $('.close-mess').on('click', function(e) {
            e.stopPropagation();
            e.preventDefault();
            $('.close-mess').hide();
            $('#fb-root').hide();
        })
        function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');  
        console.log(urlToRedirect); 
        swal({
            title: "Bạn có thật sự muốn xóa nó?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willCancel) => {
            if (willCancel) {


                 
                window.location.href = urlToRedirect;
               
            }  


        });
    }
    </script>

</body>

</html>