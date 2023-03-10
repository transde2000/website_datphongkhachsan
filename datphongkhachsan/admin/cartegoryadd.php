<?php
    include "header.php";
    include "slider.php";
    include "class/cartegory_class.php";
?>

<?php
    $cartegory = new cartegory;
    if($_SERVER['REQUEST_METHOD']=== 'POST'){
        $cartgory_name = $_POST['cartegory_name'];
        $insert_cartegory = $cartegory ->insert_cartegory($cartgory_name);
    }
?>

<div class="admin-content-right">
            <div class="admin-content-right-category-add">
                <h1>Thêm Khách sạn</h1>
                <form action="" method="POST">
                    <input required name="cartegory_name" placeholder="Nhập tên Dịch vụ">
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>