<?php
    $firstname = isset($_POST['firstname'])? $_POST['firstname']: '';
    $lastname = isset($_POST['lastname'])? $_POST['lastname']: '';
    $email = isset($_POST['email'])? $_POST['email']: '';
    $company = isset($_POST['company'])? $_POST['company']: '';
    $message = isset($_POST['message'])? $_POST['message']: '';

    if($firstname && $lastname && $email && $company && $message){
        require "db.php";
        $data = "INSERT INTO appointment (firstname,lastname,email,company,message)  
        VALUES('$firstname','$lastname','$email', '$company','$message')";
        $result = mysqli_query($con, $data);

        if ($con->query($data) === TRUE){
            echo"<div><p>Your appointment has been received succesfully</p></div>";
        }else{
            echo "<div><p>your appointmet has faild kindly try again</p></div>";
        }
    }else{
        $fields = 'All fields are required';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a Free Consultation</title>
    <style>
        <?php include "./header/assets/pop-up.css";?>
    </style>
</head>
<body>
  <div> <label><?php echo $fields?></label></div>
<form id="contact-form" action="" method="POST">
  <!-- <div class="form-group">
    <label for="name">Name (required)</label>
    <input type="text" id="name" name="name" required>
  </div> -->
  <div class="form-group">
    <label for="first-name">First Name</label>
    <input type="text" id="first-name" name="firstname" required>
  </div>
  <div class="form-group">
    <label for="last-name">Last Name</label>
    <input type="text" id="last-name" name="lastname" required>
  </div>
  <div class="form-group">
    <label for="email">Email Address (required)</label>
    <input type="email" id="email" name="email" required>
  </div>
  <div class="form-group">
    <label for="subject">Company (required)</label>
    <input type="text" id="subject" name="company" required>
  </div>
  <div class="form-group">
    <label for="message">Message (required)</label>
    <textarea id="message" name="message" rows="4" required></textarea>
  </div>
  <div class="form-group">
    <input type="submit" value="Submit">
  </div>
</form>
<script src="Scripts/x_cancel.js"></script>
</body>
</html>
