<!-- định nghĩa -->

<?php
    include "database.php";
?>

<?php 
    class room {
        private $db;
        public function __construct()
        {
            $this -> db = new Database();    
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

        public function show_hotel_ajax($cartegory_id){
            $query = "SELECT * FROM tbl_hotel WHERE cartegory_id = '$cartegory_id'";
            $resuft = $this ->db->select($query);
            return $resuft;
        }


        public function insert_room(){
            $room_name = $_POST['room_name'];
            // bịp vương
            $cartegory_id = $_POST['cartegory_id'];
            $hotel_id = $_POST['hotel_id'];
            $room_price = $_POST['room_price'];
            $room_pricenew = $_POST['room_pricenew'];
            $room_desc = $_POST['room_desc'];
            $room_img = $_FILES['room_img']['name'];
            $filetarget = basename($_FILES['room_img']['name']);
            $filetype = strtolower(pathinfo($room_img,PATHINFO_EXTENSION));
            $filesize = $_FILES['room_img']['size'];
            if(file_exists("uploads/$filetarget")){
                $alert = " File đã tồn tại";
                return $alert;
            }else{
                if($filetype != "jpg" && $filetype != "ppg" && $filetype != "jpeg") {
                    $alert = " Chọn File jpg, png, ipeg";
                    return $alert;
                }
                else {
                    if($filesize > 1000000){
                        $alert = " File không được lớn hơn 1MB";
                        return $alert;
                    }
                    else{
                        move_uploaded_file($_FILES['room_img']['tmp_name'],"uploads/".$_FILES['room_img']['name']);
                        $query = "INSERT INTO tbl_room (
                            room_name,
                            cartegory_id, 
                            hotel_id, 
                            room_price, 
                            room_pricenew, 
                            room_desc, 
                            room_img) 
                        VALUES (
                            '$room_name', 
                            '$cartegory_id', 
                            '$hotel_id', 
                            '$room_price', 
                            '$room_pricenew', 
                            '$room_desc', 
                            '$room_img')";
                        $resuft = $this ->db->insert($query);
                        if($resuft){
                            $query = "SELECT * FROM tbl_room ORDER BY room_id DESC LIMIT 1";
                            $resuft = $this -> db -> select($query)->fetch_assoc();
                            $room_id = $resuft['room_id'];
                            $filename = $_FILES['room_img_desc']['name'];
                            $filetmp = $_FILES['room_img_desc']['tmp_name'];
                    
                            foreach($filename as $key => $value){

                                move_uploaded_file($filetmp[$key],"uploads/".$value);
                                $query = "INSERT INTO tbl_room_img_desc (room_id, room_img_desc) VALUES ('$room_id','$value')";
                                $resuft = $this ->db ->insert($query);
                            }
                        }
                    } 
                }
 
            }

            
            // header('Location:hotellist.php');
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