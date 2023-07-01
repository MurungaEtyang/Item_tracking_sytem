<style><?php include "./assets/css/fetch.css";?></style>
<?php
    require("../db.php");
    $sql = "SELECT firstname,lastname, email, subject, message FROM contact_us";

    $retrev =  $con->query($sql);
    if($retrev->num_rows > 0) {
        echo "<table>";
        echo "<tr><th></th><th>First name</th><th>last name</th><th>email</th><th>subject</th><th>message<t/h><tr>";
        $count = 1;
            while ($row = $retrev->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$count."</td>";
                echo "<td>".$row['firstname']."</td>";
                echo "<td>".$row['lastname']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['subject']."</td>";
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