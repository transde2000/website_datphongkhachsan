<!-- định nghĩa -->

<?php
    include "database.php";
?>

<?php 
    class hotel {
        private $db;
        public function __construct()
        {
            $this -> db = new Database();    
        }

        public function insert_hotel($cartgory_id,$hotel_name){
            $query = "INSERT INTO tbl_hotel (cartegory_id,hotel_name) VALUES ('$cartgory_id','$hotel_name')";
            $resuft = $this ->db->insert($query);
            header('Location:hotellist.php');
            return $resuft;
        }
        
        public function show_cartegory(){
            $query = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
            $resuft = $this ->db->select($query);
            return $resuft;
        }
        public function show_hotel(){
            // $query = "SELECT * FROM tbl_hotel ORDER BY hotel_id DESC";
            $query = "SELECT tbl_hotel.*, tbl_cartegory.cartegory_name 
            FROM tbl_hotel INNER JOIN tbl_cartegory ON tbl_hotel.cartegory_id = tbl_cartegory.cartegory_id
            ORDER BY tbl_hotel.hotel_id DESC";
            $resuft = $this ->db->select($query);
            return $resuft;
        }
        public function get_hotel($hotel_id){
            $query = "SELECT * FROM tbl_hotel WHERE hotel_id = '$hotel_id'";
            $resuft = $this ->db->select($query);
            return $resuft;
        }
        public function update_hotel($cartgory_id,$hotel_name,$hotel_id){
            $query = "UPDATE tbl_hotel SET hotel_name = '$hotel_name', cartegory_id = '$cartgory_id' WHERE hotel_id = '$hotel_id'";
            $resuft = $this ->db->update($query);
            header('Location:hotellist.php');
            return $resuft;
        }
        public function delete_hotel($hotel_id){
            $query = "DELETE FROM tbl_hotel WHERE hotel_id = '$hotel_id' ";
            $resuft = $this ->db->delete($query);
            header('Location:hotellist.php');
            return $resuft;
        }
    }

?>