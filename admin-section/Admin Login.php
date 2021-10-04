<?php require("connection.php")?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Royal Palace</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Admin Login Panel</title>
    <link rel="stylesheet" href="template.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel = "icon" href = "tempimg/logo.png" type = "image/png">
    </head>
    <body>
        <!-- header -->
        <header class = "header" id = "header">
            <div class = "head-top">
                <div class = "site-name">
                    <span><img id="siz" src="tempimg/royal.png" alt="Royal Hotel"></span>
                </div>
                <div class = "site-nav">
                    <span id = "nav-btn">MENU <i class = "fas fa-bars"></i></span>
                </div>
            </div>

            
        </header>
        <!-- end of header -->

        <!-- side navbar -->
        <div class = "sidenav" id = "sidenav">
            <span class = "cancel-btn" id = "cancel-btn">
                <i class = "fas fa-times"></i>
            </span>

            <ul class = "navbar">
                <li><a href = "../index.html">home</a></li>
                <li><a href = "#footer">services</a></li>
                <li><a href = "../room.php">rooms</a></li>
                <li><a href = "#footer">Contact</a></li>
                <li><a href = "#footer">About Us</a></li>
            </ul>
            
        </div>
        <!-- end of side navbar -->

        <!-- fullscreen modal -->
        <div id = "modal"></div>
        <!-- end of fullscreen modal -->
        
      
            <div class="container">
                <div class="myform">
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'] )?>">
                        <h3>ADMIN LOGIN PANEL</h3>
                        <input type="text" placeholder="  Enter Your Email" name="AdminName">
                        <input type="Password" placeholder="  Password" name="AdminPass">
                        <button id="but" type ="submit" name="Login">LOGIN</button>
                    </form>
                </div>
        
            </div>
            <?php
            
            function input_filter($data)
            {
                $data=trim($data);
                $data=stripslashes($data);
                $data=htmlspecialchars($data);
                return $data;
        
            }
            if(isset($_POST['Login'])){
                $AdminName=input_filter($_POST['AdminName']) ;
                $AdminPass=input_filter($_POST['AdminPass']);
        
                $AdminName=mysqli_real_escape_string($con,$AdminName);
                $AdminPass=mysqli_real_escape_string($con,$AdminPass);
                 
                $query="SELECT * FROM `admin_login` WHERE  `Email`=? and  `Password`=?";
            
                if($stmt=mysqli_prepare($con,$query))
                {
                    mysqli_stmt_bind_param($stmt,"ss",$AdminName,$AdminPass);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    if(mysqli_stmt_num_rows($stmt)==1)
                    {
                        session_start();
                        $_SESSION['AdminLoginId']=$AdminName;

                        header("location: Admin Dashboard.php");
                        //echo "<script> alert ('Login Succesful');</script>";
                    }
                    else
                    {
                        echo "<script> alert ('Invalid Admin name or password');</script>";
                    }
                }
            
                else
                {
                    echo "<script> alert ('sql not prepared');</script>";
                }
            }
            
            ?>
        

        
        
        <!-- footer -->
        <footer class = "footer" id="footer">
            <div class = "footer-container">
                <div>
                    <h2>About Us </h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque sapiente mollitia doloribus provident? Eos quisquam aliquid vel dolorum, impedit culpa.</p>
                    <ul class = "social-icons">
                        <li class = "flex">
                            <i class = "fa fa-twitter fa-2x"></i>
                        </li>
                        <li class = "flex">
                            <i class = "fa fa-facebook fa-2x"></i>
                        </li>
                        <li class = "flex">
                            <i class = "fa fa-instagram fa-2x"></i>
                        </li>
                    </ul>
                </div>

                <div>
                    <h2>Useful Links</h2>
                    <a href = "#">Blog</a>
                    <a href = "#">Rooms</a>
                    <a href = "#">Subscription</a>
                    <a href = "#">Gift Card</a>
                </div>

                <div>
                    <h2>Privacy</h2>
                    <a href = "#">Career</a>
                    <a href = "#">About Us</a>
                    <a href = "#">Contact Us</a>
                    <a href = "#">Services</a>
                </div>

                <div>
                    <h2>Have A Question</h2>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-map-marker-alt"></i>
                        </span>
                        <span>
                            203 Fake St.Mountain View, San Francisco, California, USA
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-phone-alt"></i>
                        </span>
                        <span>
                            +84545 37534 48
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-envelope"></i>
                        </span>
                        <span>
                            info@domain.com
                        </span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end of footer -->
        
        <script src="script.js"></script>
    </body>
</html>