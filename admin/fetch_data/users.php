<?php
    require("../db.php");
    $sql = "SELECT username, email FROM users";

    $retrev =  $con->query($sql);
    if($retrev->num_rows > 0) {
        while ($row = $retrev->fetch_assoc()) {
            echo "username: ".$row['username']. " ". "email: ".$row['email']. " ";
        }
    }else{echo " error";}
  
    $con->close();


?>