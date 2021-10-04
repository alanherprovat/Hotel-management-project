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
                    <li><a href="../index.html">Royal Hotel</a></li>
                    <li><a href="Admin Dashboard.php">Dashboard</a></li>
                    <li><a href="#rooms">Rooms</a></li>
                    <li><a href="#footer">About Us</a></li>
                </ul>
            </div>
        </div>

        <!-- end of side navbar -->

        <!-- fullscreen modal -->
        <div id = "modal"></div>
        <!-- end of fullscreen modal -->

        <br><br>
        <div class="row" id="room">
            <div class="col-md-12">
                <center><h2> Room Booking page </h2></center>
            </div>
        </div>  
        <br>
        <center><h4>Room Type: Single Non-AC Rooms</h4></center>  
        <br>
        <div class="row" style="margin-left:5em">
            <?php
              $connection=mysqli_connect("localhost","root","");
              $db = mysqli_select_db($connection,"hotel");
              $query="select * from singlenonac";
              $query_run=mysqli_query($connection,$query);
              
               while($row=mysqli_fetch_assoc($query_run)){
                  ?>
                  <div class="card"  >
                    <div class="card bg light" style="width:300px"> 
                        <div class="card-header">Room No:&nbsp <?php echo $row['rno']?></div>
                        <div class="card_body">
                          <p class="card-text" style="margin-left:2em"> Room Status: <?php  if ($row['status']==0){echo "<b>Available</b>";} else{echo "<b>Already Booked</b>";}?></p>
                          <a href="book_room.php? rn=<?php echo $row['rno']."&rt=a"; ?>" style="margin-left:2em"class="btn btn-primary <?php if ($row['status']==0){echo "active";} else{echo "disabled";} ?> ">Book</a>
                          <a href="unbook.php ? rn=<?php echo $row['rno']."&rt=a"; ?>" style="margin-left:2em"class="btn btn-danger <?php if ($row['status']==1){echo "active";} else{echo "disabled";} ?> ">UnBook</a>

                         </div>
                    </div>
                  </div>
                  <?php
               }
                
              

            ?>
                        
                  
        </div>
        <br>

        <br>
        <center><h4>Room Type: Single AC Rooms</h4></center>  
        <br>
        <div class="row"  style="margin-left:5em">
            <?php
              $connection=mysqli_connect("localhost","root","");
              $db = mysqli_select_db($connection,"hotel");
              $query="select * from singleac";
              $query_run=mysqli_query($connection,$query);
              
               while($row=mysqli_fetch_assoc($query_run)){
                  ?>
                  <div class="card"  >
                    <div class="card bg light" style="width:300px"> 
                        <div class="card-header">Room No:&nbsp <?php echo $row['rno']?></div>
                        <div class="card_body">
                          <p class="card-text" style="margin-left:2em"> Room Status: <?php  if ($row['status']==0){echo "<b>Available</b>";} else{echo "<b>Already Booked</b>";}?></p>
                          <a href="book_room.php? rn=<?php echo $row['rno']."&rt=b"; ?>" style="margin-left:3em"class="btn btn-primary <?php if ($row['status']==0){echo "active";} else{echo "disabled";} ?>">Book</a>
                          <a href="unbook.php? rn=<?php echo $row['rno']."&rt=b"; ?>" style="margin-left:3em"class="btn btn-danger <?php if ($row['status']==1){echo "active";} else{echo "disabled";} ?> ">UnBook</a>

                         </div>
                    </div>
                  </div>
              
                  <?php
                }
              



            ?>
        </div>
        <br>
        <br>
        <center><h4>Room Type: Double Non-AC Rooms</h4></center>  
        <br>
        <div class="row" style="margin-left:5em">
            <?php
              $connection=mysqli_connect("localhost","root","");
              $db = mysqli_select_db($connection,"hotel");
              $query="select * from doublenonac";
              $query_run=mysqli_query($connection,$query);
              
               while($row=mysqli_fetch_assoc($query_run)){
                  ?>
                  <div class="card"  >
                    <div class="card bg light" style="width:300px"> 
                        <div class="card-header">Room No:&nbsp <?php echo $row['rno']?></div>
                        <div class="card_body">
                          <p class="card-text" style="margin-left:2em"> Room Status: <?php  if ($row['status']==0){echo "<b>Available</b>";} else{echo "<b>Already Booked</b>";}?></p>
                          <a href="book_room.php? rn=<?php echo $row['rno']."&rt=c"; ?>" style="margin-left:3em" class="btn btn-primary <?php if ($row['status']==0){echo "active";} else{echo "disabled";} ?>">Book</a>
                          <a href="unbook.php? rn=<?php echo $row['rno']."&rt=c"; ?>" style="margin-left:3em"class="btn btn-danger <?php if ($row['status']==1){echo "active";} else{echo "disabled";} ?> ">UnBook</a>

                         </div>
                    </div>
                  </div>
              
                  <?php
                }
              



            ?>
        </div>
        <br>
        <br>
        <center><h4>Room Type: Double AC Rooms</h4></center>  
        <br>
        <div class="row" style="margin-left:5em">
            <?php
              $connection=mysqli_connect("localhost","root","");
              $db = mysqli_select_db($connection,"hotel");
              $query="select * from doubleac";
              $query_run=mysqli_query($connection,$query);
              
               while($row=mysqli_fetch_assoc($query_run)){
                  ?>
                  <div class="card"  >
                    <div class="card bg light" style="width:300px"> 
                        <div class="card-header">Room No:&nbsp <?php echo $row['rno']?></div>
                        <div class="card_body">
                          <p class="card-text" style="margin-left:2em"> Room Status: <?php  if ($row['status']==0){echo "<b>Available</b>";} else{echo "<b>Already Booked</b>";}?></p>
                          <a href="book_room.php? rn=<?php echo $row['rno']."&rt=d"; ?>" style="margin-left:3em" class="btn btn-primary <?php if ($row['status']==0){echo "active";} else{echo "disabled";} ?>">Book</a>
                          <a href="unbook.php? rn=<?php echo $row['rno']."&rt=d"; ?>" style="margin-left:3em"class="btn btn-danger <?php if ($row['status']==1){echo "active";} else{echo "disabled";} ?> ">UnBook</a>

                         </div>
                    </div>
                  </div>
              
                  <?php
                }
              



            ?>
        </div>
        <br><br><br><br><br><br><br>

        
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