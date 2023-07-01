<?php 
    class Allusers{
        var $db = "../admin/db.php";
        // public function __construct($database_conncet) {
        //     $this->db = $database_conncet;
        // }

        
        public function users(){

            include ($this->db);
            $sql = "SELECT * FROM users";

            mysqli_query($con, $sql);
            $data = mysqli_field_count($con);
            echo "USERS \n".$data;
        }

        public function appointments(){
            include ($this->db);
            $sql = "SELECT * FROM appointment";

            mysqli_query($con, $sql);
            $data = mysqli_field_count($con);
            echo "Appointments \n".$data;
        }

        public function chats(){
            include ($this->db);
            $sql = "SELECT * FROM chatwithus";

            mysqli_query($con, $sql);
            $data = mysqli_field_count($con);
            echo "Total chats \n".$data;
        }
        
        
    }
// $Allusers = new Allusers();
// $Allusers->users();

?>