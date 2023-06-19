<?php
    require("../db.php");
    include("../header/head.php");
    $sql = "SELECT firstname,lastname, email, company, message FROM appointment";

    $retrev =  $con->query($sql);
    if($retrev->num_rows > 0) {
        while ($row = $retrev->fetch_assoc()) {
            // echo "first name: ".$row['firstname']. " ". "last name: ".$row['lastname']. " ". "email: ".$row['email']. " ". 
            // "company: ".$row['company']. " ". "message: ".$row['message']. "\n";

            $f = $row['firstname'];
            $l = $row['lastname'];
            $e = $row['email'];
            $s = $row['company'];
            $m = $row['message'];
            echo "<div>
                    <table>
                        <th>first name</th>
                        <th>last name</th>
                        <th>email</th>
                        <th>company</th>
                        <th>message</th>

                        <tr>
                            <td>$f</td>
                            <td>$l</td>
                            <td>$e</td>
                            <td>$s</td>
                            <td>$m</td>
                        </tr>
                    </table>
                  </div>";
        }
    }else{echo " error";}
  
    $con->close();


?>