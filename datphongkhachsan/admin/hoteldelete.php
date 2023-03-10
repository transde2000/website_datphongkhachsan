<?php
    include "class/hotel_class.php";

    $hotel = new hotel;
    $hotel_id = $_GET['hotel_id'];
    $delete_hotel = $hotel -> delete_hotel($hotel_id);
    
?>