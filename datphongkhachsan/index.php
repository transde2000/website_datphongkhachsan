<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./homecss/stylesfooter.css">
    <link rel="stylesheet" href="./homecss/styletop.css">
    <link rel="stylesheet" href="./homecss/them.css">
    <title>HD-Hotel</title>
</head>
<body>
<header>
    <div class="logo">
        <img src="./images/logo.jpg" alt="" style="width:100px; height:70px "> 
    </div>
    <div class="others">
        <li><a class="fa fa-solid fa-heart fa-beat" style="--fa-animation-duration: 0.5s;" href=""> Giới thiệu nhận quà</a></li>
        <li><a class="fa fa-shopping-bag" href=""> Đơn hàng</a></li>
        <li><a class="fa fa-solid fa-bell" href=""> Thông báo</a></li>
        <li><a class="fa fa-user" href="./user/login_form.php"> Đăng nhập</a></li>
        <li><a class="fa fa-user" href="./user/register_form.php"> Đăng ký</a></li>
        <li><a class="fa fa-user" href="./user/logout.php"> Đăng xuất</a></li>
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
<section id="banner">
    <div class="aspect-ratio-169">
        <img src="images/banner1.jpg">
        <img src="images/banner2.jpg">
        <img src="images/banner3.png">
    </div>
    <div class="dot-container">
        <div class="dot active"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>
</section>
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
<!-- JAVaCRIP -->
<script>
    const header = document.querySelectorAll("header")
window.addEventListener("scroll",function(){
    x = window.pageYOffset
    if(x>0){
        header.classList.add("sticky")
    }
    else {
        header.classList.remove("sticky")
    }
})


const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
const imgContainer = document.querySelector(".aspect-ratio-169")
const dotItem = document.querySelectorAll(".dot")
let imgNumber = imgPosition.length
let index = 0
// console.log(imgPosition)
imgPosition.forEach(function(images,index){
    images.style.left = index*100 + "%"
    dotItem[index].addEventListener("click", function(){
    banner (index)    
    })
})
function imgbanner (){
    index++;
    console.log(index)
    if (index >= imgNumber) {index=0}
    banner (index)
}
function banner (index) {
    imgContainer.style.left = "-" + index*100 + "%"
    const dotActive = document.querySelector(".active")
    dotActive.classList.remove("active")
    dotItem[index].classList.add("active")
}
setInterval(imgbanner,5000)

</script>
</html>