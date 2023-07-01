<style><?php include "./assets/css/fetch.css";?></style>
<?php
    require("../db.php");
    $sql = "SELECT firstname,lastname, email, company, message FROM appointment";

    $retrev =  $con->query($sql);
    if($retrev->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>NO</th><th>First name</th><th>last name</th><th>email</th><th>company</th><th>message<t/h><tr>";
        $count = 1;
            while ($row = $retrev->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$count."</td>";
                echo "<td>".$row['firstname']."</td>";
                echo "<td>".$row['lastname']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['company']."</td>";
                echo "<td>".$row['message']."</td>";
                echo "</tr>";
                $count++;
            }
            echo "</table>";
        } else {
            echo "No results found.";
        }
        
    $con->close();


?>