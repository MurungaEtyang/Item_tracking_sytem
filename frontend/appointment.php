<?php
    $firstname = isset($_POST['firstname'])? $_POST['firstname']: '';
    $lastname = isset($_POST['lastname'])? $_POST['lastname']: '';
    $email = isset($_POST['email'])? $_POST['email']: '';
    $company = isset($_POST['company'])? $_POST['company']: '';
    $message = isset($_POST['message'])? $_POST['message']: '';
    $date = date('Y-m-d H:i:s');

    if($firstname && $lastname && $email && $company && $message){
        //do semething
        require "db.php";
        $data = "INSERT INTO appointment (firstname,lastname,email,company,message)  
        VALUES('$firstname','$lastname','$email', '$company','$message','$date')";
        $result = mysqli_query($con, $data);

        if ($con->query($data) === TRUE){
            echo"<div><p>Your appointment has been received succesfully</p></div>";
        }else{
            echo "<div><p>your appointmet has faild kindly try again</p></div>";
        }
    }else{
        echo "<div><p>All fields are required</p></div>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
    <style>
        <?php include("header/assets/appointment.css");?>
    </style>

</head>
<body>
    <div>
        <h3>Book a free consultation</h3>
        <p><b>PLEASE COMPLETE THE FORM BELOW TO BOOK A FREE CONSULTATION
             AND DISCUSS YOUR PACKAGING REDUCTION TARGETS WITH AN EXPERT. </b></p>
        <form action="" method = POST>
            <label for="first name">first name</label>
            <input type="text" placeholder = "enter first name" class = "firstname" name = "firstname">
            <label for="last name">last name</label>
            <input type="text" placeholder = "enter last name" class = "lastname" name = "lastname">
            <label for="email">email</label>
            <input type="email" placeholder = "enter email" class = email name = "email">
            <label for="company">company</label>
            <input type="text" placeholder = "enter your company" class = "company" name = "company">
            <label for="textarea">message</label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
            <input type="submit">

        </form>
    </div>
</body>
</html>