<script>function myFunction() {
  var x = document.getElementById("test");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}</script>
</head>
<body>
    <div>
        <nav>
            <img src="images/th.jpeg" id="img-1" alt="">
            <ul>
                <li><a href="" id= "back-home">home</a></li>
                <li><a href="" id = "back-reuseid">reuseId</a></li>
                <li><a href="" id = "back-solutions">solutions</a></li>
                <li><a href="" id = "back-about">about</a></li>
                <li><a href="" id = "back-news">news</a></li>
                <button onclick="myFunction()" id ="button-1">login</button>
                
                <button id="button-1">book a call</button>
            </ul>
            <div id= "test"><?php include "login.php"?></div>
        </nav>
    </div>
    <div>
        <form action="" id="form-1">
            <center>
                <h1>Reuse, made simple.</h1>
                <h4>THE DATA-POWERED REUSABLE PACKAGING TRACKING PLATFORM</h4>
                <p>Reath’s easy-to-use software helps businesses launch and scale
                    reusable packaging systems that engage customers, 
                    improve ESG results, and generate return on investment</p>
                <button id ="button-2">Book a free consultation</button>
            </center>
        </form>
    </div>
    <div id="home-img">
        <img src="images/th.jpeg" alt="">
    </div>

    <div>
        <form action="" id="form-2">
            <center>
                <h2 >Reath works with businesses of all sizes to help them reduce their packaging waste</h2>
                <li><img src="images/th.jpeg" alt=""></li>
                <li><img src="images/th.jpeg" alt=""></li>
                <li><img src="images/th.jpeg" alt=""></li>
                <li><img src="images/th.jpeg" alt=""></li>
                <li><img src="images/th.jpeg" alt=""></li>
                <li><img src="images/th.jpeg" alt=""></li>
                <li><img src="images/th.jpeg" alt=""></li>
                <li><img src="images/th.jpeg" alt=""></li>
            </center>
        </form>
    </div>
</body>
</html>