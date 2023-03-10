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
    <link rel="stylesheet" href="./css/payment.css">
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
<!-- PAYMENT -->
<section class="payment">
    <div class="container">
    <div class="payment-top-wrap">
        <div class="payment-top">
            <div class="payment-top-cart payment-top-item">
                <i class="fas fa-shopping-cart"></i>
            </div>
            <div class="payment-top-adress payment-top-item">
                <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="payment-top-payment payment-top-item">
                <i class="fas fa-money-check-alt"></i>
            </div>
        </div>
    </div>
    <div class="containers">
        <div class="payment-content row" >
            <div class="payment-content-left">
                <div class="payment-content-left-method-information">
                    <p style="font-weight: bold;">Phương thức check in khách sạn</p>
                    <div class="payment-content-left-method-information-item">
                        <input checked type="radio">
                        <label for="">Check in tại quầy lễ tân khách sạn</label>
                    </div>
                </div>
                <div class="payment-content-left-method-payment">
                    <p style="font-weight: bold;">Phương thức thanh toán</p>
                    <p>Mọi giao dịch đều được bảo mật và mã hoá. Thôn tin thẻ tín dụng sẽ không bao giờ lưu lại.</p>
                    <div class="payment-content-left-method-payment-item">
                        <input name="method-payment" type="radio">
                        <label for="">Thanh toán bằng thẻ tín dụng (OnePay)</label>
                    </div>
                    <div class="payment-content-left-method-payment-item-img">
                        <img src="./payment/icvisa.jpg" alt="" style="height: 50px; width:100px;">
                    </div>
                    <div class="payment-content-left-method-payment-item">
                        <input checked name="method-payment" type="radio">
                        <label for="">Thanh toán bằng thẻ ATM (OnePay)</label>
                    </div>
                    <div class="payment-content-left-method-payment-item-img"> 
                        <img src="./payment/vcb.png" alt="" style="height: 70px; width:100px;">
                        <img src="./payment/bidv.png" alt="" style="height: 70px; width:100px;">
                        <img src="./payment/donga.png" alt="" style="height: 70px; width:100px;">
                    </div>
                    <div class="payment-content-left-method-payment-item">
                        <input name="method-payment" type="radio">
                        <label for="">Thanh toán Momo</label>
                    </div>
                    <div class="payment-content-left-method-payment-item-img">
                        <img src="./payment/momo.jpg" alt="" style="height: 40px; width:40px;">
                    </div>
                    <div class="payment-content-left-method-payment-item">
                        <input name="method-payment" type="radio">
                        <label for="">Thanh toán tại quầy khách sạn</label>
                    </div>
                </div>
            </div>
            <div class="payment-content-right">
                <div class="payment-content-right-button">
                    <input type="text" placeholder="Mã giảm giá/Quà tặng">
                    <button><i class="fas fa-check"></i></button>
                </div>
                <div class="payment-content-right-button">
                    <input type="text" placeholder="Mã nhân viên">
                    <button><i class="fas fa-check"></i></button>
                </div>
                <div class="payment-content-right-manv">
                    <select name="" id="">
                        <option value="">Chọn mã nhân viên</option>
                        <option value="">A123</option>
                        <option value="">B124</option>
                        <option value="">C125</option>
                        <option value="">D126</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="payment-content-right-payment row">
            <button>TIẾP TỤC THANH TOÁN</button>
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