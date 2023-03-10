<?php
    include "header.php";
    include "slider.php";
    include "class/hotel_class.php";
?>
<?php
    $hotel = new hotel;
    if($_SERVER['REQUEST_METHOD']=== 'POST'){
        $cartgory_id = $_POST['cartegory_id'];
        $hotel_name = $_POST['hotel_name'];
        $insert_hotel = $hotel ->insert_hotel($cartgory_id,$hotel_name);
    }
?>
<style>
    select {
        height: 30px;
        width: 200px;
    }
</style>
<div class="admin-content-right">
            <div class="admin-content-right-category-add">
                <h1>Thêm Khách sạn</h1> <br>
                <form action="" method="POST">
                    <select name="cartegory_id" id="">
                        <option value="">-- Chọn Khách sạn</option> 
                        <?php 
                            $show_cartegory = $hotel -> show_cartegory();
                            if($show_cartegory){while($rusult = $show_cartegory -> fetch_assoc()){

                             
                        ?>
                        <option value="<?php echo $rusult['cartegory_id'] ?>"><?php echo $rusult['cartegory_name'] ?></option>
                        <?php
                               }
                            }
                        ?>
                    </select> <br>
                    <input required name="hotel_name" placeholder="Nhập tên khách sạn">
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>