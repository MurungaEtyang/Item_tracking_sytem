<?php
    $firstname = isset($_POST['firstname'])? $_POST['firstname']: '';
    $lastname = isset($_POST['lastname'])? $_POST['lastname']: '';
    $email = isset($_POST['email'])? $_POST['email']: '';
    $subject = isset($_POST['subject'])? $_POST['subject']: '';
    $message = isset($_POST['message'])? $_POST['message']: '';

    $fields = '';

    if($firstname && $lastname && $email && $subject && $message){
        require "db.php";
        $data = "INSERT INTO contact-us (firstname, lastname, email, subject, message)  
        VALUES('$firstname','$lastname','$email', '$subject','$message')";
        $result = mysqli_query($con, $data);

        if ($result){
            echo "<div><p>Thank you for contacting us</p></div>";
        }else{
            echo "<div><p>Your appointment has failed. Kindly try again</p></div>";
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
  <title>Contact Us</title>
  <style>
    <?php include "./header/assets/pop-up.css";?>
  </style>
</head>
<body>
  <div>
    <label><?php echo $fields?></label>
  </div>

  <form id="contact-form" action="#" method="POST">
    <div class="form-group">
      <label for="first-name">First Name (required)</label>
      <input type="text" id="first-name" name="firstname" required>
    </div>
    <div class="form-group">
      <label for="last-name">Last Name (required)</label>
      <input type="text" id="last-name" name="lastname" required>
    </div>
    <div class="form-group">
      <label for="email">Email Address (required)</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="subject">Subject (required)</label>
      <input type="text" id="subject" name="subject" required>
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
