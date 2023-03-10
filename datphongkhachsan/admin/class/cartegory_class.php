<!-- định nghĩa -->

<?php
    include "database.php";
?>

<?php 
    class cartegory {
        private $db;
        public function __construct()
        {
            $this -> db = new Database();    
        }

        public function insert_cartegory($cartgory_name){
            $query = "INSERT INTO tbl_cartegory (cartegory_name) VALUES ('$cartgory_name')";
            $resuft = $this ->db->insert($query);
            header('Location:cartegorylist.php');
            return $resuft;
        }
        
        public function show_cartegory(){
            $query = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
            $resuft = $this ->db->select($query);
            return $resuft;
        }
        public function get_cartegory($cartegory_id){
            $query = "SELECT * FROM tbl_cartegory WHERE cartegory_id = '$cartegory_id'";
            $resuft = $this ->db->select($query);
            return $resuft;
        }
        public function update_cartegory($cartgory_name,$cartegory_id){
            $query = "UPDATE tbl_cartegory SET cartegory_name = '$cartgory_name' WHERE cartegory_id = '$cartegory_id'";
            $resuft = $this ->db->update($query);
            header('Location:cartegorylist.php');
            return $resuft;
        }
        public function delete_cartegory($cartegory_id){
            $query = "DELETE FROM tbl_cartegory WHERE cartegory_id = '$cartegory_id' ";
            $resuft = $this ->db->delete($query);
            header('Location:cartegorylist.php');
            return $resuft;
        }
    }

?>