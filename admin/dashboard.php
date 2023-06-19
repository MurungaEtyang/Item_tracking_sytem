<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
include("header/head.php");
?>

<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are in user dashboard page.</p>
        <p><a href="registration.php">add users</a></p>
        <p><a href="logout.php">Logout</a></p>
        <p><a href="fetch_data/users.php">users</a></p>
        <p><a href="fetch_data/appointment.php">appointments</a></p>
        <p><a href="fetch_data/contact.php">contact us</a></p>
    </div>
</body>
</html>
