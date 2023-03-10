<?php
    include "header.php";
    include "slider.php";
    include "class/room_class.php";
?>
<?php 
    $room = new room;
    if($_SERVER['REQUEST_METHOD']=== 'POST'){
        // var_dump($_POST,$_FILES);
        // echo '<pre>';
        // echo print_r($_POST['room_img_desc']['name']);
        // echo '</pre>';
        $insert_room = $room ->insert_room($_POST,$_FILES);
    }
?>


<div class="admin-content-right">
    <div class="admin-content-right-room-add">
        <h1>Thêm Phòng</h1>
            <form action="" method="POST" enctype="multipart/form-data">
                <label for="">Nhập tên Phòng <span style="color: red;">*</span></label>
                <input name="room_name" required type="text">
                <label for="">Chọn Khách sạn <span style="color: red;">*</span></label>
                <select name="cartegory_id" id="cartegory_id">
                <option value="#">-- Chọn--</option>
                    <?php  
                        $show_cartegory = $room -> show_cartegory();
                        if($show_cartegory) {while($result = $show_cartegory -> fetch_assoc()){
                            
                        
                    ?>
                    <option value="<?php echo $result['cartegory_id'] ?>"><?php echo $result['cartegory_name'] ?></option>
                    <?php 
                            }
                        }
                    ?>
                </select>
                <label for="">Chọn Loại phòng <span style="color: red;">*</span></label>
                <select name="hotel_id" id="hotel_id">
                    <option value="#">-- Chọn--</option>

                </select>
                <label for="">Giá niêm yết <span style="color: red;">*</span></label>
                <input name="room_price" required type="text">
                <label for="">Giá khuyến mãi <span style="color: red;">*</span></label>
                <input name="room_pricenew" required type="text">
                <label for="">Mô tả phòng <span style="color: red;">*</span></label>
                <textarea required name="room_desc" id="editor1" cols="30" rows="10"></textarea>
                <label for="">Ảnh phòng <span style="color: red;">*</span></label>
                <span style="color: red;"><?php if(isset($insert_room)) {
                    echo $insert_room;
                   }?></span>
                <input name="room_img" required type="file">
                <label for="">Ảnh mô tả phòng <span style="color: red;">*</span></label>
                <input name="room_img_desc[]" required multiple type="file">
                <button type="submit">Thêm</button>
            </form>
        </div>
    </div>
</section>
<script>
    CKEDITOR.replace( 'editor1', {
	filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
	filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
} );
</script>

<script>
    $(document).ready(function(){
        $("#cartegory_id").change(function(){
            var x = $(this).val()
            $.get("roomadd_ajax.php",{cartegory_id:x},function(data){
                $("#hotel_id").html(data);
            })
        })
    })
</script>
</body>
</html>