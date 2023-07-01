<style><?php include "./assets/css/fetch.css";?></style>
<?php
    require("../db.php");
    $sql = "SELECT email, date FROM chatwithus ORDER BY date DESC";

    $retrev = $con->query($sql);
    if (!empty($retrev) && $retrev->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>NO</th><th>email</th><th>date</th></tr>";
        $count = 1;
        while ($row = $retrev->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$count."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['date']."</td>";
            echo "</tr>";
            $count++;
        }
        echo "</table>";
    } else {
        echo "No results found.";
    }

    $con->close();
?>
