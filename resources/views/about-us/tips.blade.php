@extends('layouts.main-layouts-3')
@section('content')
<div class="container tips">
            <div class="row">
                <div class="col-sm-4">
                    <div style="border-right: 1px solid #F2F2F2">
                        <h3>Mẹo nhỏ </h3>
                        <h6>Lamp of me :</h6>
                        <div class="d-flex justify-content-center" style="padding: 15px 0px">
                            <img src="https://0711.vn/assets/images/lamp.png" width="180" height="180">
                        </div>
                        <p>Hãy giữ bình tĩnh, nhớ lại những việc bạn đã làm, tìm kiếm kỹ lưỡng và có phương pháp ở những nơi mà bạn nghĩ là sẽ tìm được món đồ nhanh nhất có thể...</p>
                        <hr />
                        <p>Thể loại</p>
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Tìm đồ thất lạc</a>
                            </li>
                        </ul>
                        <hr class="d-sm-none">
                    </div>
                </div>
                <div class="col-sm-8">
                    <div onclick="document.location = '/tips/phot-hongnhanbacphan'" style="cursor: pointer">
                        <h2>Phốt với Cò Chó/Mèo Hồng Nhan Bạc Phận (HNBP)</h2>
                        <h6>03/07/2022</h6>
                        <div style="margin: 20px 0">
                            <img src="https://0711.vn/storage/uploads/admin/images597/phot hnbp 2.png" style="max-height: 200px;width: 100%" />
                        </div>
                        <p>Sau qua trình chúng tôi theo dõi và tìm hiểu có thể tóm gọn mấy từ về Cò Hồng Nhan Bạc Phân (hnbp) là KIẾM TIỀN BẨN - THAO TÚNG THỊ TRƯỜNG - LỪA DỐI KIẾM LỜI tù chó mèo bị bắt trộm ...</p>
                        <br>
                        <hr/>
                        <br>
                    </div>
                    <div onclick="document.location = '/tips/tra-cuu-sdt-lua-dao'" style="cursor: pointer">
                        <h2>Cách Tra Cứu Số Điện Thoại và STK Ngân Hàng Lừa Đảo Đòi Tiền Chuộc Đồ</h2>
                        <h6>16/03/2022</h6>
                        <div style="margin: 20px 0">
                            <img src="https://0711.vn/storage/uploads/admin/images597/64b07af78920467e1f31.jpg" style="max-height: 200px;width: 100%" />
                        </div>
                        <p>Hiện có nhiều bạn phản ánh rằng hiện nay có 1 số đối tượng lợi dụng sự không may của người khác, gọi điện đòi Tiền chuộc đồ hoặc lừa đảo nhận lại đồ Các đối tượng nói chuyện rất vô văn hóa, giọng điệu dọa dẫm, lợi dụng sự không
                            may của người khác để kiếm tiền chuộc
                            <--- Đây là hành vi Vi Phạm Luật Hình Sự Vì vậy đối với những đối tượng này các bạn không cần phải lo lắng gì cả, không phải nghe đt của chúng ...</p>
                                <br>
                                <hr/>
                                <br>
                    </div>
                    <div onclick="document.location = '/tips/0711-vn-la-gi'" style="cursor: pointer">
                        <h2>0711.vn là gì?</h2>
                        <h6>24/02/2022</h6>
                        <div style="margin: 20px 0">
                            <img src="https://0711.vn/storage/uploads/admin/images597/251425079_4593077690746461_4647804356249745641_n.jpg" style="max-height: 200px;width: 100%" />
                        </div>
                        <p>Như mọi người đã biết, nhu cầu đi lại, giao thông là việc cần thiết và thiết yếu nhất đối với mỗi người. Song bên cạnh việc đi lại còn có những nhu cầu liên quan khác phát sinh. Ví dụ như việc sửa chữa, rơi mất đồ hay bị cướp giật.
                            Từ xưa đến nay, việc rơi mất đồ hay bị cướp giật là việc đáng quan ngại mà ai cũng không mong muốn nó xảy ra, vì các loại giấy tờ tuỳ thân liên quan sẽ rất khó làm lại mỗi khi bị rơi rớt hay thất lạc dọc đường. Vì vậy, https://0711.vn/
                             ra đời với sứ mệnh tìm kiếm lại giấy tờ bị đánh rơi, thất lạc.  ...</p>
                        <br>
                        <hr/>
                        <br>
                    </div>
                    <div onclick="document.location = '/tips/tim-do-that-lac-tren-internet'" style="cursor: pointer">
                        <h2>Cách Tìm Kiếm Đồ Thất Lạc Trên Internet Hiệu Quả </h2>
                        <h6>02/01/2022</h6>
                        <div style="margin: 20px 0">
                            <img src="https://0711.vn/storage/uploads/admin/images/266457667_341416347487195_5118913326523525669_n.jpg" style="max-height: 200px;width: 100%" />
                        </div>
                        <p>Rơi đồ, mất ví hay thất lạc giấy tờ là việc chẳng ai mong muốn xảy ra. Ví và giấy tờ tuỳ thân là đồ vật quan trọng nên một khi bị rơi, đánh mất hay bị trộm cắp sẽ gây ra nhiều phiền phức như mất của hay bị lợi dụng tên tuổi để
                            lừa đảo và tiêu tốn khá nhiều thời gian làm lại. Thời đại Internet ngày càng phát triển, những thủ đoạn lừa đảo càng tinh vi hơn khi thông tin của người rơi đồ bị đánh cắp và rao bán đầy rẫy trên mạng. Song, nhiều mặt tích
                            cực của mạng xã hội như những hội nhóm, web, group, Fanpage thành lập ra để tìm kiếm chủ nhân của giấy tờ rơi và trao trả lại cho họ.  ...</p>
                        <br>
                        <hr/>
                        <br>
                    </div>
                    <div onclick="document.location = '/tips/toi-da-tim-thay-cho-cua-minh-o-tp-hue-nhu-the-nao-1-1-1'" style="cursor: pointer">
                        <h2>Tôi đã tìm thấy chó của mình ở tp Huế như thế nào? </h2>
                        <h6>20/12/2021</h6>
                        <div style="margin: 20px 0">
                            <img src="https://0711.vn/storage/uploads/admin/images/toroitimchucuntenneocuaanhtrunganhquangvien_dyuh.jpg" style="max-height: 200px;width: 100%" />
                        </div>
                        <p>Vấn nạn mất chó mèo hay thất lạc thú cưng là vấn nạn thường xuyên xảy ra và gây đau đầu cho những người chủ hay những người yêu chó mèo nhất. Không phải ai cũng có thể bình tĩnh giải quyết hay áp dụng được những mẹo tìm kiếm thú
                            cưng bị thất lạc. Nhiều người áp dụng các phương pháp tìm kiếm như hỏi hàng xóm hay mở cửa chờ đợi thú cưng quay trở lại đoàn tụ cùng với các thành viên gia đình. Nhưng đôi lúc những cách trên lại không mấy khả quan và mang
                            lại kết quả như mong muốn. Dưới đây là cách mà tôi đã tìm thấy chó cưng bị thất lạc của mình trong thời gian ngắn nhất của cuộc hành trình tưởng chừng như vô vọng ...</p>
                        <br>
                        <hr/>
                        <br>
                    </div>
                    <div onclick="document.location = '/tips/cac-dia-diem-buon-ban-cho-meo-noi-tieng'" style="cursor: pointer">
                        <h2>Các Khu Chợ &amp; Địa Điểm Buôn Bán Buôn Bán Chó Mèo Nổi Tiếng</h2>
                        <h6>20/09/2021</h6>
                        <div style="margin: 20px 0">
                            <img src="https://0711.vn/storage/uploads/admin/images/241430050_219857363374224_1507945022536082117_n.jpg" style="max-height: 200px;width: 100%" />
                        </div>
                        <p>Bắt đầu từ câu chuyện buồn được chia sẻ bởi một chủ thú cưng đã tận mắt trông thấy chú Cún Con của mình bị giết mổ vì tới giải cứu không kịp,vĩnh viễn mất đi “một người thân” trong gia đình. Chúng tôi quyết định viết ra bài viết
                            này để tổng hợp lại các “Khu Chợ & Địa Điểm Buôn Bán Buôn Bán Chó Mèo Nổi Tiếng” nhằm giúp chủ nhân có thể tìm kiếm & giải cứu chó mèo,thú cưng thất lạc một cách kịp thời và nhanh nhất ...</p>
                        <br>
                        <hr/>
                        <br>
                    </div>
                    <div onclick="document.location = '/tips/thiet-bi-dinh-vi-cho-thu-cung-chong-di-lac-chong-bat-trom'" style="cursor: pointer">
                        <h2>Thiết Bị Định Vị Cho Thú Cưng Chống Đi Lạc, Chống Bắt Trộm</h2>
                        <h6>13/10/2020</h6>
                        <div style="margin: 20px 0">
                            <img src="https://0711.vn/storage/uploads/img2020101311301226952500.jpg" style="max-height: 200px;width: 100%" />
                        </div>
                        <p>Bạn muốn giữ an toàn cho những thú cưng của mình. Đó là lý do bạn thường nhốt chúng trong nhà, xích lại khi đi dạo và mang chúng đến bác sĩ thú y thường xuyên để kiểm tra, chăm sóc. Tuy nhiên, ngay cả những người luôn chú ý tới
                            chú chó hay chú mèo của mình cũng đã bị mất chúng và trải qua những nỗi sợ hãi, đau buồn. Lựa chọn thiết bị định vị cho thú cưng để giúp bạn có thể quản lý, nắm bắt được vị trí của những vật nuôi của mình. ...</p>
                        <br>
                        <hr/>
                        <br>
                    </div>
                    <div onclick="document.location = '/tips/tai-sao-mat-do-nen-lua-chon-0711vn'" style="cursor: pointer">
                        <h2>TẠI SAO MẤT ĐỒ NÊN LỰA CHỌN 0711.VN</h2>
                        <h6>08/10/2020</h6>
                        <div style="margin: 20px 0">
                            <img src="https://0711.vn/storage/uploads/admin/images/251425079_4593077690746461_4647804356249745641_n.jpg" style="max-height: 200px;width: 100%" />
                        </div>
                        <p>Khi bạn mất đồ, rơi ví, mất giấy tờ, hay lạc thú cưng bạn thường nghĩ ngay tới việc đăng tin bài trên mạng xã hội như Facebook , Tweeter, Zalo Hoặc bạn có thể in giấy, đi dán khắp nơi, nhưng liệu những việc làm đó có hiệu quả,
                            và có thể giúp bạn tìm lại Đồ Thất Lạc? ...</p>
                        <br>
                        <hr/>
                        <br>
                    </div>
                    <div onclick="document.location = '/tips/1-loi-cam-on-tu-nhung-nguoi-tim-kiem-lai-duoc-do-that-lac-cua-minh'" style="cursor: pointer">
                        <h2>1 LỜI CẢM ƠN TỪ NHỮNG NGƯỜI TÌM KIẾM LẠI ĐƯỢC ĐỒ THẤT LẠC CỦA MÌNH</h2>
                        <h6>08/10/2020</h6>
                        <div style="margin: 20px 0">
                            <img src="https://0711.vn/storage/uploads/img2020100821561600970500.jpg" style="max-height: 200px;width: 100%" />
                        </div>
                        <p>Chúng tôi luôn nhận được rất nhiều các câu hỏi về tính hiệu quả của dự án 0711.vn: Đã có ai tìm được đồ thất lạc của mình chưa? Liệu tôi có thể tìm lại được đồ bị rơi? Nếu tôi trả tiền để đăng tin thì liệu có thể tìm thấy giấy
                            tờ? dưới đây là những lời cảm ơn từ những người đã tìm thấy đồ đạc bị rơi, bị mất của mình từ hệ thống tài nguyên của dự án 0711 ...</p>
                        <br>
                        <hr/>
                        <br>
                    </div>
                    <div onclick="document.location = '/tips/cach-tim-nguoi-than-mat-tich-qua-internet-nhanh-chong-hieu-qua-nhat'" style="cursor: pointer">
                        <h2>CÁCH TÌM NGƯỜI THÂN MẤT TÍCH QUA INTERNET NHANH CHÓNG, HIỆU QUẢ NHẤT</h2>
                        <h6>08/10/2020</h6>
                        <div style="margin: 20px 0">
                            <img src="https://0711.vn/storage/uploads/img2020100821534527739400.jpg" style="max-height: 200px;width: 100%" />
                        </div>
                        <p>Bạn đã tự hỏi làm thế nào để bắt đầu tìm kiếm một người mất tích bằng cách sử dụng internet chưa? Bài viết này hướng dẫn bạn cách tìm người thân mất tích, bỏ nhà đi thông qua những trang web, mạng xã hội, dịch vụ tìm kiếm nhanh
                            chóng, hiệu quả nhất. Tất cả điều mà bạn cần làm là có một chiếc máy tính kết nối internet và thời gian rảnh rỗi. ...</p>
                        <br>
                        <hr/>
                        <br>
                    </div>
                    <div onclick="document.location = '/tips/huong-dan-lam-lai-giay-to-bi-mat-nhanh-chong-tai-ha-noi'" style="cursor: pointer">
                        <h2>HƯỚNG DẪN LÀM LẠI GIẤY TỜ BỊ MẤT NHANH CHÓNG TẠI HÀ NỘI</h2>
                        <h6>07/10/2020</h6>
                        <div style="margin: 20px 0">
                            <img src="https://0711.vn/storage/uploads/img2020100720165791697800.jpg" style="max-height: 200px;width: 100%" />
                        </div>
                        <p>Cuộc sống luôn tạo cho ta đầy rẫy những bất ngờ. Trong lúc đi đường chẳng may bạn bị rơi ví, để quên ví ở đâu đó, bị cướp,... Và trong đó chứa đựng những giấy tờ vô cùng quan trọng. Bạn băn khoăn không biết làm gì khi giấy tờ bị
                            mất? Cần làm gì để làm lại giấy tờ bị mất nhanh ở Hà Nội? Bài viết dưới đây sẽ hướng dẫn cho bạn những điều nên làm khi bị mất giấy tờ. ...</p>
                        <br>
                        <hr/>
                        <br>
                    </div>
                    <div onclick="document.location = '/tips/tin-tra-tien-tin-uu-tien-la-gi'" style="cursor: pointer">
                        <h2>&quot;TIN TRẢ TIỀN - TIN ƯU TIÊN&quot; LÀ GÌ ?</h2>
                        <h6>07/10/2020</h6>
                        <div style="margin: 20px 0">
                            <img src="https://0711.vn/storage/uploads/img2020100720051545847700.jpg" style="max-height: 200px;width: 100%" />
                        </div>
                        <p>“Tin Ưu Tiên - Trả Phí” là gì ? Là những tin, bài đăng được đặt ở vị trí ưu tiên (vị trí đẹp) sẽ thu hút cho người đăng bài ưu tiên có nhiều lượt đọc bài viết hơn, độ phủ tin bài đăng cao hơn Nhằm tăng khả năng tìm kiếm được Người
                            Nhặt Được liên hệ với Người Bị Mất. ...</p>
                        <br>
                        <hr/>
                        <br>
                    </div>
                    <div class="p-2">
                        <ul class="pagination" role="navigation">

                            <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                                <span class="page-link" aria-hidden="true">&lsaquo;</span>
                            </li>





                            <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                            <li class="page-item"><a class="page-link" href="https://0711.vn/tips?page=2">2</a></li>


                            <li class="page-item">
                                <a class="page-link" href="https://0711.vn/tips?page=2" rel="next" aria-label="Next &raquo;">&rsaquo;</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
@endsection