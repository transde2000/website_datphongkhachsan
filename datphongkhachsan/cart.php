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
    <link rel="stylesheet" href="./css/cart.css">
    <link rel="stylesheet" href="./css/exampl.css">
    <title>HD-Hotel</title>
</head>
<body>
<header>
    <div class="logo">
    <li><a href="./index.php"><img src="images/logo.jpg" alt="" style="width:100px; height:70px "></a></li>
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
<!-- CART -->
<section class="cart">
    <div class="containers">
        <div class="cart-top-wrap">
            <div class="cart-top">
                <div class="cart-top-cart cart-top-item">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="cart-top-adress cart-top-item">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="cart-top-payment cart-top-item">
                    <i class="fas fa-money-check-alt"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="cart-content row">
            <div class="cart-content-left">
                <table>
                    <tr>
                        <th>PHÒNG</th>
                        <th>SỐ PHÒNG</th>
                        <th>LOẠI PHÒNG</th>
                        <th>SL NGÀY</th>
                        <th>THÀNH TIỀN</th>
                        <th>XOÁ</th>
                    </tr>
                    <tr>
                        <td><img src="./images/room5.jpg" alt=""></td>
                        <td><p>101</p></td>
                        <td><p>Phòng đơn</p></td>
                        <td><input type="number" min = "1" value="1"></td>
                        <td><p>480.000<sup>đ</sup>/đêm</p></td>
                        <td style="padding-left: 40px;"><span>X</span></td>
                    </tr>
                </table>
            </div>
            <div class="cart-content-right">
                <table>
                    <tr>
                        <th colspan="2">TỔNG TIỀN ĐẶT PHÒNG</th>
                    </tr>
                    <tr>
                        <td>TỔNG PHÒNG ĐẶT</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>TỔNG TIỀN PHÒNG</td>
                        <td><p style="color: black; font-weight:bold">480.000 <sup>đ</sup>/ đêm</p></td>
                    </tr>
                </table>
                <div class="cart-content-right-text">
                    <p>Bạn sẽ được miễn phí bữa ăn sáng của bạn ở khách sạn khi bạn đặt <br> trị giá 800.000 <sup>đ</sup></p>
                    <p style="color: red; font-weight: bold;">Đặt thêm phòng bạn sẽ nhận được dịch vụ massage miễn phí tại khách sạn</p>
                </div>
                <div class="cart-content-right-button">
                    <button>TIẾP TỤC CHỌN PHÒNG</button>
                    <a href="./information.php"><button>THANH TOÁN</button></a>
                </div>
                <div class="cart-content-right-login">
                    <p>TÀI KHOẢN CỦA BẠN</p><br>
                    <p>Hãy <a href="./user/login.php" style="color: #663300; font-style:italic;">Đăng nhập</a> tài khoản của bạn để tích điểm thành viên</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FOOTER -->
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
</html>