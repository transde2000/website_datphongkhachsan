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
    <link rel="stylesheet" href="./css/information.css">
    <title>HD-Hotel</title>
</head>
<body>
<header>
    <div class="logo">
    <li><a href="../index.php"><img src="images/logo.jpg" alt="" style="width:100px; height:70px "></a></li>
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
<!-- INFORMATION -->
<section class="information">
    <div class="containers">
        <div class="information-top-wrap">
            <div class="information-top">
                <div class="information-top-information information-top-item">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="information-top-adress information-top-item">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="information-top-payment information-top-item">
                    <i class="fas fa-money-check-alt"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="container row">
        <div class="information-content-left">
            <p>Vui lòng nhập thông tin bên dưới</p>
            <div class="information-content-left-login row">
                <i class="fas fa-sign-in-alt"></i>
                <p>Đăng nhập (Nếu bạn đã có tài khoản HD - Hotel)</p>
            </div>
            <div class="information-content-left-khachle row">
                <input checked name="loaikhach" type="radio" value="khachle">
                <p><span style="font-weight: bold;">Khách lẻ</span> (Nếu bạn không muốn lưu thông tin)</p>
            </div>
            <div class="information-content-left-signup row">
                <input checked name="loaikhach" type="radio" value="khachle">
                <p><span style="font-weight: bold;">Đăng ký</span> (Điền thông tin ên dưới)</p>
            </div>
            <div class="information-content-left-input-top row">
                <div class="information-content-left-input-top-item">
                    <label for="">Họ tên <span style="color: red;">*</span> </label>
                    <input type="text">
                </div>
                <div class="information-content-left-input-top-item">
                    <label for="">Điện thoại <span style="color: red;">*</span> </label>
                    <input type="text">
                </div>
                <div class="information-content-left-input-top-item">
                    <label for="">Căn cức công dân <span style="color: red;">*</span> </label>
                    <input type="text">
                </div>
                <div class="information-content-left-input-top-item">
                    <label for="">Tỉnh/TP <span style="color: red;">*</span> </label>
                    <input type="text">
                </div>
                <div class="information-content-left-input-top-item">
                    <label for="">Quận/Huyện <span style="color: red;">*</span> </label>
                    <input type="text">
                </div>
                <div class="information-content-left-input-top-item">
                    <label for="">Phường/Xã <span style="color: red;">*</span> </label>
                    <input type="text">
                </div>
            </div>
                <div class="information-content-left-input-top-bottom row">
                    <label for="">Địa chỉ <span style="color: red;">*</span> </label>
                    <input type="text">
                </div>
                <div class="information-content-left-button row">
                    <a href=""><span>&#171;</span> Quay lại giỏ hàng</a>
                    <a href="./payment.php"><button><p style="font-weight: bold;">THANH TOÁN VÀ CHECKIN</p></button></a>
                </div>
            </div>
        <div class="information-content-right">
            <table>
                <tr>
                    <th>Tên phòng</th>
                    <th>Giảm giá</th>
                    <th>Số lượng phòng</th>
                    <th>Thành tiền</th>
                </tr>
                <tr>
                    <td>Phòng 101</td>
                    <td>0%</td>
                    <td>1</td>
                    <td><p>480.000 <sup>đ</sup>/ngày</p></td>
                </tr>
                <tr>
                    <td style="font-weight: bold;" colspan="3">Tổng</td>
                    <td style="font-weight: bold;">480.000 <sup>đ</sup>/ngày</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;" colspan="3">Thuế VAT</td>
                    <td style="font-weight: bold;">48.000 <sup>đ</sup></td>
                </tr>
                <tr>
                    <td style="font-weight: bold;" colspan="3">Tổng tiền thanh toán</td>
                    <td style="font-weight: bold;">528.000 <sup>đ</sup>/ngày</td>
                </tr>
            </table>
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