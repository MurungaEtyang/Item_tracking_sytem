<?php
    require("login.php");

    $log = login();
    if ($log === "ok") {
        include("dashboard.php");
    }
    
?>