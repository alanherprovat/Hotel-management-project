<?php
session_start();
if(isset($_POST['book_room'])){

              $connection=mysqli_connect("localhost","root","");
              $db = mysqli_select_db($connection,"hotel");
              if($_POST['room_type']== 'Single Non-AC'){
                  $query="update singlenonac set holder_name='$_POST[holder_name]',
                  holder_id=$_POST[holder_id],holder_add='$_POST[holder_address]',holder_mobile='$_POST[holder_mobile]',
                  in_date='$_POST[in_date]',out_date='$_POST[out_date]', status=1 where rno=$_POST[room_no]";
              }
              if($_POST['room_type']== 'Single AC'){
                $query="update singleac set holder_name='$_POST[holder_name]',
                holder_id=$_POST[holder_id],holder_add='$_POST[holder_address]',holder_mobile='$_POST[holder_mobile]',
                in_date='$_POST[in_date]',out_date='$_POST[out_date]', status=1 where rno=$_POST[room_no]";
            }
            if($_POST['room_type']== 'Double Non-AC'){
                $query="update doublenonac set holder_name='$_POST[holder_name]',
                holder_id=$_POST[holder_id],holder_add='$_POST[holder_address]',holder_mobile='$_POST[holder_mobile]',
                in_date='$_POST[in_date]',out_date='$_POST[out_date]', status=1 where rno=$_POST[room_no]";
            }
            if($_POST['room_type']== 'Double AC'){
                $query="update doubleac set holder_name='$_POST[holder_name]',
                holder_id=$_POST[holder_id],holder_add='$_POST[holder_address]',holder_mobile='$_POST[holder_mobile]',
                in_date='$_POST[in_date]',out_date='$_POST[out_date]', status=1 where rno=$_POST[room_no]";
            }
              
              $query_run=mysqli_query($connection,$query);
              header("Location:rooms.php");
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
                   
                    <li><a href = "#info"><b>Fillup Information</b></a></li>
                    <li><a href="Admin Dashboard.php">Dashboard</a></li>
                    <li><a href = "#footer"><b>services</b></a></li>
                    <li><a href="#footer">About Us</a></li>
                </ul>
            </div>
        </div>

    <body>
        
   
        <!-- end of header -->

        <!-- side navbar -->
        
        <!-- end of side navbar -->

        <!-- fullscreen modal -->
        <div id = "modal"></div>
        <!-- end of fullscreen modal -->

        <br><br>
        
        <div class="row">
            <div class="col-md-12">
                <center><h2> Fillup Personal Information </h2></center>
            </div>
        </div>  
        <div class="row" id ="fillup" >
            <div class="col-md-4"></div>
                <form  action="" method="post">
                    


                    <div class="form-group">
                        <label style="color: #5BB2F3;"><b>Room No:</b></label>
                        <input type="text" class="form-control" name="room_no" required=""
                        value="<?php echo $_GET['rn'];    ?>">
                    </div>

                    <div class="form-group">
                        <label style="color: #5BB2F3;"><b>Room Type:</b></label>
                        <input type="text" class="form-control" name="room_type" required=""
                        value="<?php if($_GET['rt']=='a'){echo 'Single Non-AC';} 
                        if($_GET['rt']=='b'){echo 'Single AC';}
                        if($_GET['rt']=='c'){echo 'Double Non-AC';}
                        if($_GET['rt']=='d'){echo 'Double AC';}   ?>">
                    </div>
                    <div class="form-group">
                        <label style="color: #5BB2F3;"><b>Holder Name:</b></label>
                        <input type="text" class="form-control" name="holder_name"placeholder="Enter Your Name" required="">
                    </div>
                    <div class="form-group">
                        <label style="color: #5BB2F3;"><b>Holder Id:</b></label>
                        <input type="text" class="form-control" name="holder_id" placeholder="Enter 4 digit id" required="">
                    </div>
                    <div class="form-group">
                        <label style="color: #5BB2F3;"><b>Holder Mobile:</b></label>
                        <input type="text" class="form-control" name="holder_mobile" placeholder="+8801xxx"required="">
                    </div>
                    <div class="form-group">
                        <label style="color: #5BB2F3;"><b>Holder Address:</b></label>
                        <textarea rows="3" cols="40" class="form-control"name="holder_address" placeholder="Enter Full Address" required=""></textarea>
                    </div> 
                    <div class="form-group">
                        <label style="color: #5BB2F3;"><b>Check In Date:</b></label>
                        <input placeholder="Year-Month-Date"type="text" class="form-control" name="in_date" required="">
                    </div>
                    <div class="form-group">
                        <label style="color: #5BB2F3;"><b>Check Out Date:</b></label>
                        <input placeholder="Year-Month-Date" type="text" class="form-control" name="out_date" required="">
                    </div>
                    <button type="submit" style="margin-left:5em"class="btn btn-warning" name="book_room">Book Now</button>
               </form>   
            </div> 
            <div class="col-md-2"></div>
    
        </div>
                    
        
 <!-- footer -->
        <footer class = "footer" id="footer">
            <div class = "footer-container">
                <div>
                    <h2>About Us </h2>
                    <p>Remember, a person who wins success in hospitality may have been counted out many times before. He wins because he refuses to give up.And we as a team ,we refuse to give up .That's what Royal Palace extreme determination.</p>
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
                        Dhanmondi, Dhaka, Bangladesh, 1200 Dhaka, Bangladesh
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-phone-alt"></i>
                        </span>
                        <span>
                            +8801996194878
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-envelope"></i>
                        </span>
                        <span>
                        <a href="https://mail.google.com/mail/u/0/?fs=1&to=alanherprovat3@gamil.com&su=SUBJECT&body=BODY&bcc=someone.else@example.com&tf=cm">alanherprovat3@gmail.com</a>
                        </span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end of footer -->
        
        <script src="script.js"></script>
    </body>
</html>