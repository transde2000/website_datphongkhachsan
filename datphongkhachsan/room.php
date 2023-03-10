<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./styletop.css">
    <link rel="stylesheet" href="./stylesfooter.css">
    <link rel="stylesheet" href="./css/stylecartegory.css">
    <link rel="stylesheet" href="./css/room.css">
    <link rel="stylesheet" href="./css/exampl.css">
    <title>HD-Hotel</title>
</head>
<body>
<header>
    <div class="logo">
        <li><a href="./index.php"><img src="images/logo.jpg" alt="HD-Hotel"  style="width:100px; height:70px "></a></li>
        
    </div>
    <div class="others">
        <li><a class="fa fa-solid fa-heart fa-beat" style="--fa-animation-duration: 0.5s;" href=""> Giới thiệu nhận quà</a></li>
        <li><a class="fa fa-car" href=""> Dịch vụ xe của khách sạn</a></li>
        <li><a class="fa fa-shopping-bag" href=""> Đơn hàng</a></li>
        <li><a class="fa fa-solid fa-bell" href=""> Thông báo</a></li>
        <li><a class="fa fa-user" href="/datphongkhachsan/giaodien/user/dangnhap.php"> Đăng nhập</a></li>
        <li><a class="fa fa-user" href="/datphongkhachsan/giaodien/user/dangky.php"> Đăng ký</a></li>
        <li><a class="fa fa-bars" href=""></a></li>
    </div>
</header>
<header>
    <div class="menu">
        <li class="menuitem"><a href="">Mường Thanh</a>
            <ul class="submenu">
                <li><a href="cartegory.php">Phòng Đơn</a></li>
                <li><a href="">Phòng Đôi</a></li>
                <li><a href="">Phòng Gia Đình</a></li>
                <li><a href="">Phòng VIP</a></li>
                <li><a href="">Phòng Super VIP</a></li>
            </ul>
        </li>
        <li><a href="">Novotel</a></li>
            <ul class="submenu">
                <li><a href="">Phòng Đơn</a></li>
                <li><a href="">Phòng Đôi</a></li>
                <li><a href="">Phòng Gia Đình</a></li>
                <li><a href="">Phòng VIP</a></li>
                <li><a href="">Phòng Super VIP</a></li>
            </ul>
        <li><a href="">Golden Rose</a></li>
            <ul class="submenu">
                <li><a href="">Phòng Đơn</a></li>
                <li><a href="">Phòng Đôi</a></li>
                <li><a href="">Phòng Gia Đình</a></li>
                <li><a href="">Phòng VIP</a></li>
                <li><a href="">Phòng Super VIP</a></li>
            </ul>
        <li><a href="">Merry Land</a></li>
            <ul class="submenu">
                <li><a href="">Phòng Đơn</a></li>
                <li><a href="">Phòng Đôi</a></li>
                <li><a href="">Phòng Gia Đình</a></li>
                <li><a href="">Phòng VIP</a></li>
                <li><a href="">Phòng Super VIP</a></li>
            </ul>
        <li><a href="">Pearl Sea</a></li>
            <ul class="submenu">
                <li><a href="">Phòng Đơn</a></li>
                <li><a href="">Phòng Đôi</a></li>
                <li><a href="">Phòng Gia Đình</a></li>
                <li><a href="">Phòng VIP</a></li>
                <li><a href="">Phòng Super VIP</a></li>
            </ul>
        <li id="sreach"><input type="text" placeholder="Tìm kiếm khách sạn mà bạn cần ..."><a class="fa fa-search" href="" ></a></li> 
    </div>
</header>
<!-- -----------------room--------------- -->
<section class="room">
    <div class="containerr">
        <div class="room-top row">
            <a href="./trangchu.html"><p>Trang chủ</p></a> <span>&#10230; </span>
            <p> Khách sạn Mường Thanh</p><span>&#10230; </span>
            <a href="./cartegory.php"><p> Phòng chưa đặt</p></a> <span>&#10230; </span>
            <p> Phòng đơn </p>   
        </div>
        <div class="room-content row">
            <div class="room-content-left row">
                <div class="room-content-left-big-img">
                    <img src="./images/room1.jpg" alt="" style="height: 515px;">
                </div>
                <div class="room-content-left-small-img">
                    <img src="./images/room2.jpg" alt="" style="width: 130px; height:126px">
                    <img src="./images/room3.jpg" alt="" style="width: 130px; height:126px">
                    <img src="./images/room4.jpg" alt="" style="width: 130px; height:126px">
                    <img src="./images/room5.jpg" alt="" style="width: 130px; height:126px">   
                </div>
            </div>
            <div class="room-content-right">
                <div class="room-content-right-roomname">
                    <h1>PHÒNG ĐƠN</h1>
                    <p style="color: rgb(146, 19, 19);">P: 101</p>
                </div>
                <div class="room-content-right-roomprice">
                    <p>480.000<sup>đ</sup>/ngày</p>
                </div>
                <div class="room-content-right-roomsee">
                    <p><span style="font-weight: bold;">Loại phòng</span>: Phòng Đơn <span style="color: red;">*</span></p>
                    <div class="room-content-right-roomsee-img">
                        <img src="./images/couple.jpg" alt="">
                    </div>
                </div>
                <div class="room-content-right-roompeopel">
                    <p style="font-weight: bold;">Số lượng người</p>
                    <div class="roompeopel">
                        <span>1</span>
                        <span>2</span>
                    </div>
                </div>
                <div class="date">
                    <p>Ngày đặt phòng: </p>
                    <input type="date">    
                    <p id="date">Ngày trả phòng: </p>
                    <input type="date">
                    
                </div>
                <div class="SL-date">     
                    <p style="color: red;">Số ngày đặt:</p>
                    <input id="number" type="number">
                </div>
                <div class="room-content-right-roombutton">
                    <a href="./cart.php"><button><i class="fas fa-shopping-cart"></i><p>ĐẶT PHÒNG</p></button></a> 
                    <button><p>TÌM PHÒNG KHÁC</p></button>
                </div>
                <div class="room-content-right-roomicon">
                    <div class="room-content-right-roomicon-item">
                        <i class="fas fa-phone-alt"><p style="font-weight: normal;">Hotline</p></i>
                    </div>
                    <div class="room-content-right-roomicon-item">
                        <i class="far fa-comments"><p>Chat</p></i>
                    </div>
                    <div class="room-content-right-roomicon-item">
                        <i class="far fa-envelope"><p>Mail</p></i>
                    </div>
                </div>
                <div class="room-content-right-roomQR">
                    <img src="./images/qrcode.png" alt="" style="width: 50px; height: 50;">
                </div>
                <div class="room-content-right-bottom">
                    <div class="room-content-right-bottom-top">
                        &#8744;
                    </div>
                    <div class="room-content-right-bottom-big">
                        <div class="room-content-right-bottom-big-title row">
                            <div class="room-content-right-bottom-big-title-item chitietphong">
                                <p>Chi tiết phòng</p>
                            </div>
                            <div class="room-content-right-bottom-big-title-item quydinhkhachsan">
                                <p>Quy định khách sạn</p>
                            </div>
                            <div class="room-content-right-bottom-big-title-item">
                                <p>Tham khảo phòng khác</p>
                            </div>
                        </div>
                        <div class="room-content-right-bottom-content">
                            <div class="room-content-right-bottom-content-chitietphong">
                                <p>- Hạng mục các loại phòng tại khách sạn hiện nay thì phòng suite là loại phòng cao cấp nhất với diện tích từ 60 – 120m2. 
                               <br><br>- Do diện tích khá rộng nên đầu tư nội thất khá nhiều hạng mục, chi phí đầu tư thiết kế thi công cao nên chi phí khách sử dụng phòng cũng cao hơn hẳn.
                               <br><br>- Phòng suite nói chung do khá cao cấp nên trong thiết kế hạng mục có phân hạng ra thêm là phòng Junior và Executive.</p> <br><br>
                            </div>
                            <div class="room-content-right-bottom-content-quydinhkhachsan">
                                <p>- Quy định về các loại giấy tờ mà khách lưu trú phải xuất trình khi làm thủ tục check-in, kiểm tra tài sản khi nhận phòng. <br><br>
                                - Các quy định đảm bảo an toàn cháy nổ: không nấu nướng trong phòng, sử dụng các vật liệu dễ gây cháy nổ… <br><br>
                                - Các quy định về đảm bảo an toàn – an ninh trong khách sạn: không mang chất cẩm, chất độc hại, vũ khí, chất nổ vào khách sạn; bảo vệ tài sản cá nhân của khách lưu trú; khách đến thăm… <br><br>
                                - Các quy định bảo vệ tài sản của khách sạn: sử dụng các trang thiết bị theo hướng dẫn, không phá hoại tài sản trong phòng… <br><br>
                                - Quy định về giữ gìn vệ sinh chung trong khách sạn. <br><br>
                                - Quy định về thời gian check-out, thủ tục trả phòng, thanh toán. <br></p> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- ROOM - RELATED -->
<section class="room-related">
    <div class="room-ralated-title">
        <p>LỰA CHỌN PHÒNG TƯƠNG TỰ</p>
    </div>
    <div class="room-content row">
        <div class="room-related-item">
            <img src="./images/imag8.jpg" alt="" style="height: 200px; width: 400px;">
            <h1>Khách sạn Mường Thanh</h1>
            <br>
            <div class="h3">
                <h5>Khách sạn <span>⭐️⭐️⭐️</span></h5><br>
                <h5><a href="" class="fa fa-map-marker"></a> Địa chỉ 35 Phan Chu Trinh, Hải Châu 1, Quận Hải Châu, Đà Nẵng</h5><br>
                <h5>Loại phòng: Phòng đơn</h5><br>
                <h5>Giá phòng: 350.000<sup>đ</sup>/đêm</h5>
                <h5 id="rice">400.000 <sup>đ</sup>/đêm</h5>
                <button id="button1" name="button" type="button">Đặt phòng</button>
            </div>
        </div>
        <div class="room-related-item">
            <img src="./images/imag7.jpg" alt="" style="height: 200px; width: 400px;">
            <h1>Khách sạn Mường Thanh</h1>
            <br>
            <div class="h3">
                <h5>Khách sạn <span>⭐️⭐️</span></h5><br>
                <h5><a href="" class="fa fa-map-marker"></a> Địa chỉ 35 Phan Chu Trinh, Hải Châu 1, Quận Hải Châu, Đà Nẵng</h5><br>
                <h5>Loại phòng: Phòng đơn</h5><br>
                <h5>Giá phòng: 250.000<sup>đ</sup>/đêm</h5>
                <h5 id="rice">400.000 <sup>đ</sup>/đêm</h5>
                <button id="button1" name="button" type="button">Đặt phòng</button>
            </div>
        </div>
        <div class="room-related-item">
            <img src="./images/imag6.jpg" alt="" style="height: 200px; width: 400px;">
            <h1>Khách sạn Mường Thanh</h1>
            <br>
            <div class="h3">
                <h5>Khách sạn <span>⭐️⭐️⭐️⭐️</span></h5><br>
                <h5><a href="" class="fa fa-map-marker"></a> Địa chỉ 35 Phan Chu Trinh, Hải Châu 1, Quận Hải Châu, Đà Nẵng</h5><br>
                <h5>Loại phòng: Phòng đơn</h5><br>
                <h5>Giá phòng: 300.000<sup>đ</sup>/đêm</h5>
                <h5 id="rice">400.000 <sup>đ</sup>/đêm</h5>
                <button id="button1" name="button" type="button">Đặt phòng</button>
            </div>
        </div>
        <div class="room-related-item">
            <img src="./images/imag5.jpg" alt="" style="height: 200px; width: 400px;">
            <h1>Khách sạn Mường Thanh</h1>
            <br>
            <div class="h3">
                <h5>Khách sạn <span>⭐️⭐️⭐️⭐️⭐️</span></h5><br>
                <h5><a href="" class="fa fa-map-marker"></a> Địa chỉ 35 Phan Chu Trinh, Hải Châu 1, Quận Hải Châu, Đà Nẵng</h5><br>
                <h5>Loại phòng: Phòng đơn</h5><br>
                <h5>Giá phòng: 380.000<sup>đ</sup>/đêm</h5>
                <h5 id="rice">400.000 <sup>đ</sup>/đêm</h5>
                <button id="button1" name="button" type="button">Đặt phòng</button>
            </div>
        </div>
    </div>

</section>
<!-- ---------footer----------------------- -->
<section class="footer">
    <p>Tải ứng dụng từ HD-Hotels</p>
    <div class="app-icon">
        <img src="images/appgoogleplay.png" alt="" style="height: 50px; width: 200px">
        <img src="images/appstore.png" alt="" style="height: 50px; width: 200px">
    </div>
    <p>Nhận thông báo từ HD-Hotel</p>
    <input type="text" placeholder="Nhập email của bạn...">
</section>
<div class="footer-top">
    <li><a href=""><img src="images/logothongbao.png" alt=""></a></li>
    <li><a href="">Liện hệ</a></li>
    <li><a href="">Tuyển dụng</a></li>
    <li><a href="">Giới thiệu</a></li>
    <li>
        <a href="" class="fab fa-facebook-f"></a>
        <a href="" class="fab fa-twitter"></a>
        <a href="" class="fab fa-youtube"></a>
    </li>
</div>
<div class="footer-center">
    <p>Khách sạn HD-Hotel <br>
        Địa chỉ Khách sạn: 379 Xô Viết Nghệ Tĩnh, P.Hoà Cường Nam, Q.Hải Châu, TP.Đà Nẵng - 091 910 8661 <br>
        Đặt phòng online : <b>035 323 4645 .</b>
    </p> 
</div> 
<div id="copyright">
    <p> <strong>Copyright © 2022 HD-Hotel . Design by </strong><a href="https://m.me/"><strong><u>Trần Sư Đệ</u></strong></a></p>
</div>
</body>
<!-- ROOM -->
<script>
    const bigimg = document.querySelector(".room-content-left-big-img img")
    const smallimg = document.querySelectorAll(".room-content-left-small-img img")
    smallimg.forEach(function(imgitem,X){
        imgitem.addEventListener("click", function(){
            bigimg.src = imgitem.src
        })
    })


    const quydinhkhachsan = document.querySelector(".quydinhkhachsan")
    const chitietphong = document.querySelector(".chitietphong")
    if(quydinhkhachsan){
        quydinhkhachsan.addEventListener("click", function(){
            document.querySelector(".room-content-right-bottom-content-chitietphong").style.display = "none"
            document.querySelector(".room-content-right-bottom-content-quydinhkhachsan").style.display = "block"
        })
    }
    if(chitietphong){
        chitietphong.addEventListener("click", function(){
            document.querySelector(".room-content-right-bottom-content-chitietphong").style.display = "block"
            document.querySelector(".room-content-right-bottom-content-quydinhkhachsan").style.display = "none"
        })
    }
    const button = document.querySelector(".room-content-right-bottom-top")
    if(button){
        button.addEventListener("click", function(){
            document.querySelector(".room-content-right-bottom-big").classList.toggle("activeB")
        })
    }
</script>
</html>