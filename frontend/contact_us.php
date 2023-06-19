<?php
    $firstname = isset($_POST['firstname'])? $_POST['firstname']: '';
    $lastname = isset($_POST['lastname'])? $_POST['lastname']: '';
    $email = isset($_POST['email'])? $_POST['email']: '';
    $subject = isset($_POST['subject'])? $_POST['subject']: '';
    $message = isset($_POST['message'])? $_POST['message']: '';

    if($firstname && $lastname && $email && $subject && $message){
        require "db.php";
        $data = "INSERT INTO contact_us (firstname,lastname,email,subject,message)  
        VALUES('$firstname','$lastname','$email', '$subject','$message')";
        // $result = mysqli_query($con, $data);

        if ($con->query($data) === TRUE){
            echo"<div><p>Thank you for contact us we'll get back to you</p></div>";
        }else{
            echo '<script>alert("error found")</script>';
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
        <?php include("header/assets/contact_us.css");?>
    </style>

</head>
<body>
    <nav></nav>
    <div>
        <h3>Get in touch</h3>
        
        <form action="" method = POST>
            <label for="first name">first name</label>
            <input type="text" placeholder = "enter first name" class = "firstname" name = "firstname">
            <label for="last name">last name</label>
            <input type="text" placeholder = "enter last name" class = "lastname" name = "lastname">
            <label for="email">email</label>
            <input type="email" placeholder = "enter email" class = email name = "email">
            <label for="company">subject</label>
            <input type="text" placeholder = "enter your subject" class = "subject" name = "subject">
            <label for="textarea">message</label>
            <textarea name="message" id="message" cols="30" rows="10"  placeholder = "write here"></textarea>
            <input type="submit">

        </form>
    </div>
    
</body>
</html>