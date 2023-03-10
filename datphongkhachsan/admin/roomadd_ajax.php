<?php 
    include "class/room_class.php";
    $room = new room;

    $cartegory_id = $_GET['cartegory_id']
?>


<?php
    $show_hotel_ajax = $room ->show_hotel_ajax($cartegory_id);
    if ($show_hotel_ajax) {while ($result = $show_hotel_ajax->fetch_assoc()) {


?>
        <option value="<?php echo $result['hotel_id'] ?>"><?php echo $result['hotel_name'] ?></option>
<?php
        }
    }
?>