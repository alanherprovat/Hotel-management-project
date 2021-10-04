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
              if($query_run==true){
                //$message = "Room Has Been Booked Successfully";
                $_SESSION['add'] = "<div style='color:blue'>Room Has Been Booked Successfully</div>";
                header("Location:../room.php? rt=a");
                  
              }
              
              }
              

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Royal Palace</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="book_room.css">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel = "icon" href = "images/logo.png" type = "image/png">
    </head>
    <body>
        
    <header class = "header-main" id = "header" >
            <div class = "head-top">
                <div class = "site-name">
                    <span><img  id= "siz" src="images/royal.png" alt="Royal Hotel" ></span>
                </div>
                
                
            </div>
            
        <div class = "site-nav">
                <ul class = "navbar" >
                   <li ><a href = "../index.html"><b>Home Page</b></a></li>
                   <li ><a href = "../room.php"><b>Room Status</b></a></li>
                  <li><a href = "#footer"><b>About Us</b></a></li>
                
                </ul>
                </div>    
        </header>
        <br>
        
        <div class="row">
            <div class="col-md-12">
                <center><h2> Fillup Personal Information </h2></center>
            </div>
        </div>  
        <div class="row" id ="fillup" >
        <!--<div class="col-md-12"></div>
        <div class="col-md-4"></div>
            <div class="col-md-3" >-->
                <form  action="" method="post" style="margin:auto">
                    


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
                        <input type="text" class="form-control" name="holder_name" required=""placeholder="Enter your full name">
                    </div>
                    <div class="form-group">
                        <label style="color: #5BB2F3;"><b>Holder Id:</b></label>
                        <input  type="text" class="form-control" name="holder_id" required=""placeholder="Enter 4 digit id">
                    </div>
                    <div class="form-group">
                        <label style="color: #5BB2F3;"><b>Holder Mobile:</b></label>
                        <input type="text" class="form-control" name="holder_mobile" required=""placeholder="+880xxx">
                    </div>
                    <div class="form-group">
                        <label style="color: #5BB2F3;"><b>Holder Address:</b></label>
                        <textarea rows="3" cols="40" class="form-control"name="holder_address" required=""placeholder="Enter full address"></textarea>
                    </div> 
                    <div class="form-group">
                        <label style="color: #5BB2F3;"><b>Check In Date:</b></label>
                        <input placeholder="Year-Month-Date"type="text" class="form-control" name="in_date" required="">
                    </div>
                    <div class="form-group">
                        <label style="color: #5BB2F3;"><b>Check Out Date:</b></label>
                        <input placeholder="Year-Month-Date" type="text" class="form-control" name="out_date" required="">
                    </div>
                    <button type="submit" style="margin-left:7em"class="btn btn-warning" name="book_room">Book Now</button>
               </form>  
               </div> 
<!--/div> -->
           <!-- <div class="col-md-2"></div>-->
    
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