<?php
session_start();
if(isset($_POST['book_table'])){

              $connection=mysqli_connect("localhost","root","");
              $db = mysqli_select_db($connection,"restaurant");
              if($_POST['table_type']== 'single'){
                  $query="update single set holder_name='$_POST[holder_name]',
                  holder_id=$_POST[holder_id],holder_address='$_POST[holder_address]',holder_mobile='$_POST[holder_mobile]',
                   status=1 where table_no=$_POST[table_no]";
              }
              if($_POST['table_type']== 'couple'){
                $query="update double_t set holder_name='$_POST[holder_name]',
                holder_id=$_POST[holder_id],holder_address='$_POST[holder_address]',holder_mobile='$_POST[holder_mobile]',
                 status=1 where table_no=$_POST[table_no]";
            }
            if($_POST['table_type']== 'family'){
                $query="update family set holder_name='$_POST[holder_name]',
                holder_id=$_POST[holder_id],holder_address='$_POST[holder_address]',holder_mobile='$_POST[holder_mobile]',
                 status=1 where table_no=$_POST[table_no]";
            }
              
              $query_run=mysqli_query($connection,$query);
              header("Location:completion.php");
}

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Royal Palace</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/book_table.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <link rel = "icon" href = "img/favicon.png" type = "image/png">
    </head>
<body>
<header class = "header" id = "header">
            <div class = "head-top">

            <div class = "site-name">
                    <span><img  src="img/royal.png"id= "siz"  alt="Ready Food" hight="10" width="20"></span>
                </div>
                <div class = "site-nav">
                    <span id = "nav-btn">MENU <i class = "fas fa-bars"></i></span>
                </div>
            </div>
            
        </header>
        <div class = "sidenav" id = "sidenav">
            <span class = "cancel-btn" id = "cancel-btn">
                <i class = "fas fa-times"></i>
            </span>

            <ul class = "navbar">
                <li><a href = "Restaurant.php">Ready Food</a></li>
                <br>

                <li><a href = "#header">home</a></li>
                <br>

                
                <li><a href = "#tables">Table Booking</a></li>
                <br>
                
                <li><a href = "#footer">About Us</a></li>
            </ul>
            
        </div>
    <div id="tables">
    <div class="row">
            <div class="col-md-12" >
                <center><h2> Fillup Info. For Reservation </h2></center>
            </div>
        </div>  
        <div class="row"   >
            <div class="col-md-4"></div>
                <form  action="" method="post">
                <div class="form-group">
                        <label>Table No:</label>
                        <input type="text"  class="form-control" name="table_no" required=""
                        value="<?php echo $_GET['tn'];    ?>">
                    </div>
                    <div class="form-group">
                        <label>Table Type:</label>
                        <input type="text"  class="form-control" name="table_type" required=""
                        value="<?php if($_GET['tt']=='a'){echo 'single';} 
                        if($_GET['tt']=='b'){echo 'couple';}
                        if($_GET['tt']=='c'){echo 'family';}  ?>">
                    </div>
                <div class="form-group">
                        <label>Holder Name:</label>
                        <input type="text" class="form-control" name="holder_name" required="" placeholder="Your Full Name">
                    </div>
                    <div class="form-group">
                        <label>Holder Id:</label>
                        <input  type="text" class="form-control" name="holder_id" required="" placeholder="Enter 4 digit id">
                    </div>
                    <div class="form-group">
                        <label>Holder Mobile:</label>
                        <input type="text" class="form-control" name="holder_mobile" required="" placeholder="+880xxx">
                    </div>
                    <div class="form-group">
                        <label>Holder Address:</label>
                        <textarea rows="3" cols="40" class="form-control"name="holder_address" required=""  placeholder="Enter Full Address"></textarea>
                    </div> 
                    <button type="submit" style="margin-left:5em"class="btn btn-warning" name="book_table">Book Now</button>
               </form>   
            </div> 
            <div class="col-md-2"></div>
    
        </div>
</div>
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
                            8 no. Road, Chittagong, Bangladesh
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-phone-alt"></i>
                        </span>
                        <span>
                            01732134454765
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
        
        <script src="js/reservation.js"></script>
    </body>
</html>