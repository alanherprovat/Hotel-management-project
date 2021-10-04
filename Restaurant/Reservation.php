<html>
    <head>
        <meta charset="utf-8">
        <title>Royal Palace</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/reservation.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <link rel = "icon" href = "img/favicon.png" type = "image/png">
    </head>

<body>
   
   
    <header class = "header" id = "header">
            <div class = "head-top">
            <div class = "site-name">
                    <span><img src="img/royal.png" id= "siz"  alt="Ready Food" hight="10" width="20"></span>
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
                <li><a href = "restaurant.php">Ready Food</a></li>
                <br>

                <li><a href = "#header">home</a></li>
                <br>

                
                <li><a href = "#tables">Table Status</a></li>
                <br>
                
                <li><a href = "#footer">About Us</a></li>
            </ul>
            
        </div>
    <div class="row" id="tables">
            <div class="col-md-12">
            <center><h2> Table Reservation Status </h2></center>
            </div>
        </div>  
    <div id="des">
        <center><h3> Table Type:- Single</h3></center>
    <div class="row" style="margin-left:5em">
         <?php
          $connection=mysqli_connect("localhost","root","");
          $db=mysqli_select_db($connection,"restaurant");
          $query="select * from single";
          $query_run=mysqli_query($connection,$query);
          while($row=mysqli_fetch_assoc($query_run)){
        ?>
             <div class="card" style="margin-left:75px;">
                    <div class="card bg-light text-dark" style="width: 270px;"> 
                        <div class="card-header">Table No:&nbsp<?php echo $row['table_no']?></div>
                        <div class="card_body">
                          <p class="card-text" style="margin-left:2em"> Table Status: <?php  if ($row['status']==0){echo "<b>Available</b>";} else{echo "<b>Already Booked</b>";}?></p>
                          <a href="book_table.php? tn=<?php echo $row['table_no']."&tt=a"; ?>" style="margin-left:4.1em"class="btn btn-primary <?php if ($row['status']==0){echo "active";} else{echo "disabled";} ?> ">Book</a>

                         </div>
                    </div>
             </div>
              
                  <?php
            }
     
        ?>
    </div>
        
    <br><br>
    <center><h3> Table Type:- Double</h3></center>
    <div class="row" style="margin-left:5em">
     <?php
     $connection=mysqli_connect("localhost","root","");
     $db=mysqli_select_db($connection,"restaurant");
     $query="select * from double_t";
     $result=mysqli_query($connection,$query);
     while($row=mysqli_fetch_assoc($result)){
       ?>
       <div class="card" style="margin-left:75px;">
                    <div class="card bg-light text-dark" style="width: 270px;"> 
                        <div class="card-header">Table No:&nbsp<?php echo $row['table_no']?></div>
                        <div class="card_body">
                          <p class="card-text" style="margin-left:2em"> Table Status: <?php  if ($row['status']==0){echo "<b>Available</b>";} else{echo "<b>Already Booked</b>";}?></p>
                          <a href="book_table.php? tn=<?php echo $row['table_no']."&tt=b"; ?>" style="margin-left:4em"class="btn btn-primary <?php if ($row['status']==0){echo "active";} else{echo "disabled";} ?> ">Book</a>

                         </div>
                    </div>
                  </div>
              
                  <?php
     }
     ?>
    </div>
    <br><br>
    <center><h3> Table Type:- Family</h3></center>
    <div class="row" style="margin-left:5em">
     <?php
     $connection=mysqli_connect("localhost","root","");
     $db=mysqli_select_db($connection,"restaurant");
     $query="select * from family";
     $result=mysqli_query($connection,$query);
     while($row=mysqli_fetch_assoc($result)){
       ?>
       <div class="card" style="margin-left:75px;">
                    <div class="card bg-light text-dark" style="width: 270px;"> 
                        <div class="card-header">Table No:&nbsp<?php echo $row['table_no']?></div>
                        <div class="card_body">
                          <p class="card-text" style="margin-left:2em"> Table Status: <?php  if ($row['status']==0){echo "<b>Available</b>";} else{echo "<b>Already Booked</b>";}?></p>
                          <a href="book_table.php? tn=<?php echo $row['table_no']."&tt=c"; ?>" style="margin-left:4em"class="btn btn-primary <?php if ($row['status']==0){echo "active";} else{echo "disabled";} ?> ">Book</a>

                         </div>
                    </div>
                  </div>
              
                  <?php
     }
     ?>
    </div>
    </div>
    
    <!-- footer -->
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
        
        <script src="js/reservation.js"></script>
    </body>
</html>