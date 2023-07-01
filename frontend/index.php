
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoTrace</title>
    <link rel="stylesheet" href="header/assets/nav-bar.css">
    <style>
        <?php include "header/assets/nav-bar.css";?>
    </style>
</head>
<body>
    <div>
        <nav>
            <img src="images/ecotrace_icon.png" id="img-1" alt="">
            <ul>
                <li><a href="#" id="back-home">home</a></li>
                <li><a href="#" id="back-reuseid">reuseId</a></li>
                <li><a href="#" id="back-solutions">solutions</a></li>
                <li><a href="#" id="back-about">about</a></li>
                <li><a href="#" id="back-news">news</a></li>
                <button id="button-login">login</button>
                <button id="button-book-call">book a call</button>
            </ul>
        </nav>
    </div>
    <div>
        <form action="#" id="form-1">
            <center>
                <h1>Reuse, made simple.</h1>
                <h4>THE DATA-POWERED REUSABLE PACKAGING TRACKING PLATFORM</h4>
                <p>EcoTrace easy-to-use software helps businesses launch and scale
                    reusable packaging systems that engage customers,
                    improve ESG results, and generate return on investment
                </p>
                <button id="button-2">Book a free consultation</button>
            </center>
        </form>
    </div>
    <div id="home-img">
        <img src="images/Recycle Bin free icons designed by Ghozi Muhtarom.png" alt="" id="img-2">
    </div>

    <!-- login page -->
    <div id="modal" style="display: none;">
        <div id="content">
        <button id="closeButton">&#x2716;</button>
        </div>
    </div>

    <div>
        <form action="#" id="form-2">
            <center>
                <h2 id="h2-1">EcoTrace works with businesses of all sizes to help them reduce their packaging waste</h2>
                <li><img src="images/th.jpeg" alt="" id="img1"></li>
                <li><img src="images/th.jpeg" alt="" id="img2"></li>
                <li><img src="images/th.jpeg" alt="" id="img3"></li>
                <li><img src="images/th.jpeg" alt="" id="img4"></li>
                <li><img src="images/th.jpeg" alt="" id="img6"></li>
                <li><img src="images/th.jpeg" alt="" id="img7"></li>
                <li><img src="images/th.jpeg" alt="" id="img8"></li>
                <li><img src="images/th.jpeg" alt="" id="img9"></li><br>

                <h2 id="h2-2">Powerful Technology to support your Reusable Packaging System</h2>
                <p>Our technology is compatible with businesses and products in every consumer category -
                    packaging for food, beauty and home cleaning, to homewares and electronics.
                    View our case studies to learn how Reath has transformed the sustainability efforts of leading brands.</p>

                <h2 id="h2-3">Why choose EcoTrace</h2>
                <p>EcoTrace gives data and visibility on the reuse performance of each individual
                    product for the first time. Reach your ESG goals and help drive a sustainable future.</p>
            </center>
        </form>
    </div>
    <footer>
        <div>
        <?php 
                include "db.php";  
                $email = isset($_POST['email'])? $_POST['email']: '';
                $date = date('Y-m-d H:i:s');
                if($email && $date){
                    $data = "INSERT INTO chatwithus (email, date) 
                    VALUES('$email', '$date')";
                    mysqli_query($con, $data);
                }
                $con->close();
                
            ?>
            <form action="" id="footer1" method="POST">
                <p>Want to chat with us about your reuse system?</p>
                <input type="text" name="email" placeholder="email address"></input>
                <button>SAY HELLO</button>
                <a href="#">CASE STUDIES</a>
                <a href="#">Blog</a>
                <a href="#"> App Privacy Policy</a>
                <a href="#">Work with Us</a>
                <button id = "contact-us">Contact</button>
                <a href="#">FAQs</a>
            </form>
        </div>
        <div>
            
            <form id="footer2">
                <a href="">organization admin</a>
                <a href="">twitter</a>
                <p>Get in touch with us at hello@reath.id</p>
                <p>&copy; <?php echo date("Y"); ?> TECHNOLOGY LTD. T/A REATH</p>
                <p>22 Dean Path Buildings</p>
                <p>Edinburgh, EH4 3AZ</p>
            </form>
        </div>
    </footer>
    <script><?php require_once "Scripts/main-script.js"?></script>
</body>
</html>
