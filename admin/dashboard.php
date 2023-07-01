<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
include("header/head.php");
include("fetch_data/total_users.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <!-- <link rel="stylesheet" href="assets/css/style.css"/> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .form {
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 800px;
            margin: 0 auto;
            margin-top: 50px;
        }

        .form p {
            margin: 0;
            font-size: 16px;
            line-height: 1.5;
        }

        .label_users, .label_appointment {
            display: block;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
            font-size: 16px;
            text-align: center;
            color: #333;
        }

        .users, .appointment, .contact, .chat{
            display: inline-block;
            margin-right: 10px;
        }

        .users span, .appointment span, .contact span, .chat span{
            font-weight: bold;
            font-size: 18px;
        }

        .users-content, .appointment-content, .contact-content, .chat-content{
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-top: 5px;
        }

        .button.logout {
            display: inline-block;
            background-color: #f0f0f0;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            margin-top: 20px;
            text-decoration: none;
            color: #333;
            font-size: 16px;
            cursor: pointer;
        }

        .button.logout:hover {
            background-color: #ccc;
        }

        .button.logout a {
            color: #333;
            text-decoration: none;
        }

        .button.logout a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p id="paragraph_dashboard">You are on the user dashboard page.</p>

        <label for="users" class="label_users">
            <?php 
                require_once("fetch_data/total_users.php");
                $data = new Allusers();
                $data->users();
            ?>
        </label>

        <label for="appointments" class="label_appointment">
            <?php
                require_once("fetch_data/total_users.php");
                $appoint = new Allusers();
                $appoint->appointments();

            ?>

        </label>

        <label for="appointments" class="label_appointment">
            <?php
                require_once("fetch_data/total_users.php");
                $appoint = new Allusers();
                $appoint->chats();

            ?>

        </label>
        <div class = "users">
            <span>users<span>
            <div class = "users-content">
                <p><a href="registration.php">add users</a></p>
                <p><a href="fetch_data/users.php">users</a></p>
            </div>
        </div>

        <div class = "appointment">
            <span>appointment<span>
            <div class = "appointment-content">
                <p><a href="fetch_data/appointment.php">appointments</a></p>
            </div>
        </div>

        <div class = "contact">
            <span>contacted<span>
            <div class = "contact-content">
                <p><a href="fetch_data/contact.php">contacted</a></p>
            </div>
        </div>
        
        <div class = "chat">
            <span>chats<span>
            <div class = "chat-content">
                <p><a href="fetch_data/chat.php">chats</a></p>
            </div>
        </div>
</div>    
    <button class = "button.logout"><p><a href="logout.php">Logout</a></p></button>
    </div>
</body>
</html>
