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
              header("Location:Table.php");
}

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Royal Palace</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="template.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <link rel = "icon" href = "images/logo.png" type = "image/png">
    </head>
    <body>
        
        <!-- header -->
      
        <!-- end of header -->
        <!-- end of header -->
         <!-- side navbar -->
         

        <div class="menu text-center" >
            <div class="wrapper">
                <ul>
                    
                    <li><a href="Admin Dashboard.php">Dashboard</a></li>
                    <li><a href="#rooms">Tables</a></li>
                    <li><a href="#footer">About Us</a></li>
                </ul>
            </div>
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
                        <input type="text" class="form-control" name="holder_name" placeholder="Enter Your Name" required="">
                    </div>
                    <div class="form-group">
                        <label>Holder Id:</label>
                        <input placeholder="Enter 4 digit id" type="text" class="form-control" name="holder_id" required="">
                    </div>
                    <div class="form-group">
                        <label>Holder Mobile:</label>
                        <input type="text" placeholder="+8801xxx" class="form-control" name="holder_mobile" required="">
                    </div>
                    <div class="form-group">
                        <label>Holder Address:</label>
                        <textarea rows="3" cols="40" class="form-control"name="holder_address"placeholder="Enter your Full Address" required=""></textarea>
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