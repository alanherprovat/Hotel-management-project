<?php require("connection.php")?>
<!DOCTYPE html>
<html>
    <head>
    
        <meta charset="utf-8">
        <title>Royal Palace</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="template.css">
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
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="../Restaurant/Restaurant.php">Restaurant</a></li>
                    <li><a href="#rooms">Rooms</a></li>
                    <li><a href="#footer">About Us</a></li>
                </ul>
            </div>
        </div>

        <!-- end of header -->

        <!-- side navbar -->
        <div class = "sidenav" id = "sidenav">
            <span class = "cancel-btn" id = "cancel-btn">
                <i class = "fas fa-times"></i>
            </span>

            <ul class = "navbar">
                <li><a href = "#header">home</a></li>
                <li><a href = "#services">services</a></li>
                <li><a href = "#rooms">rooms</a></li>
                <li><a href = "#footer">Contact</a></li>
                <li><a href = "#footer">About Us</a></li>
            </ul>
            
        </div>
        <!-- end of side navbar -->

        <!-- fullscreen modal -->
        <div id = "modal"></div>
        <!-- end of fullscreen modal -->
        
      
           <div class="row">
               <div class="col-md-2"></div>
               <div class="col-md-8">
                   <form action="" method="POST">
                       <a href="rooms.php" class="btn btn-success">Book Room</a>
                       <a href="room_status.php" class="btn btn-info" style="width: 15em;">Check Room Status</a>
                       <a href="Table.php" class="btn btn-dark" style="width: 15em;">Reserve Table</a>
                       <a href="Add room.php" class="btn btn-primary" >Add Room</a>
                       <a href="Logout.php" class="btn btn-danger" >Logout</a>
                       
                   </form>
               </div>
               <div class="col-md-2"></div>
           </div>
           <br><br><br><br>
           <div class="row">
               <div class="col-md-12">
                  <center><h3>Checked In  Room User's Details</h3></center>
               </div>
               <br><br>
               
           </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>User Name</th>
                            <th>User Id</th>
                            <th>User Mobile</th>
                            <th>Room No</th>
                            <th>Room Type</th>
                            <th>User Address</th>
                            <th>Check In</th>
                            <th>Check Out</th>
                        </tr>
                    </thead>
                    <?php
                    $user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"hotel");
                    $query = "select * from doublenonac where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        
                        $user_count = $user_count+1;
                        
                    
                    ?>
                    <tr>
                        <td><?php echo $user_count;?></td>
                        <td><?php echo $row['holder_name']?></td>
                        <td><?php echo $row['holder_id']?></td>
                        <td><?php echo $row['holder_mobile']?></td>
                        <td><?php echo $row['rno']?></td>
                        <td>Double-Non-Ac</td>
                        <td><?php echo $row['holder_add']?></td>
                       
                        <td><?php echo $row['in_date']?></td>
                        <td><?php echo $row['out_date']?></td>
                    </tr>
                    <?php
                        
                    }
                ?>

                <!--new-->  
                <?php
                    //$user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"hotel");
                    $query = "select * from singlenonac where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        
                        $user_count = $user_count+1;
                        
                    
                    ?>
                    <tr>
                        <td><?php echo $user_count;?></td>
                        <td><?php echo $row['holder_name']?></td>
                        <td><?php echo $row['holder_id']?></td>
                        <td><?php echo $row['holder_mobile']?></td>
                        <td><?php echo $row['rno']?></td>
                        <td>Single-Non-Ac</td>
                        <td><?php echo $row['holder_add']?></td>
                       
                        <td><?php echo $row['in_date']?></td>
                        <td><?php echo $row['out_date']?></td>
                    </tr>
                    <?php
                        
                    }
                ?>
                

                <?php
                    //$user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"hotel");
                    $query = "select * from doubleac where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        
                        $user_count = $user_count+1;
                        
                    
                    ?>
                    <tr>
                        <td><?php echo $user_count;?></td>
                        <td><?php echo $row['holder_name']?></td>
                        <td><?php echo $row['holder_id']?></td>
                        <td><?php echo $row['holder_mobile']?></td>
                        <td><?php echo $row['rno']?></td>
                        <td>Double-Ac</td>
                        <td><?php echo $row['holder_add']?></td>
                       
                        <td><?php echo $row['in_date']?></td>
                        <td><?php echo $row['out_date']?></td>
                    </tr>
                    <?php
                        
                    }
                ?>

<?php
                    //$user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"hotel");
                    $query = "select * from singleac where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        
                        $user_count = $user_count+1;
                        
                    
                    ?>
                    <tr>
                        <td><?php echo $user_count;?></td>
                        <td><?php echo $row['holder_name']?></td>
                        <td><?php echo $row['holder_id']?></td>
                        <td><?php echo $row['holder_mobile']?></td>
                        <td><?php echo $row['rno']?></td>
                        <td>Single-Ac</td>
                        <td><?php echo $row['holder_add']?></td>
                       
                        <td><?php echo $row['in_date']?></td>
                        <td><?php echo $row['out_date']?></td>
                    </tr>
                    <?php
                        
                    }
                ?>

                  </table>
            </div>

        </div>

        <!--new-->
        <br><br><br><br>
           <div class="row">
               <div class="col-md-12">
                  <center><h3>Checked In Restaurant User's Details</h3></center>
               </div>
               <br><br>
               
           </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>User Name</th>
                            <th>User Id</th>
                            <th>User Mobile</th>
                            <th>Table No</th>
                            <th>Room Type</th>
                            <th>User Address</th>
                        </tr>
                    </thead>
                    <?php
                    $user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"restaurant");
                    $query = "select * from double_t where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        
                        $user_count = $user_count+1;
                        
                    
                    ?>
                    <tr>
                        <td><?php echo $user_count;?></td>
                        <td><?php echo $row['holder_name']?></td>
                        <td><?php echo $row['holder_id']?></td>
                        <td><?php echo $row['holder_mobile']?></td>
                        <td><?php echo $row['table_no']?></td>
                        <td>Couple</td>
                        <td><?php echo $row['holder_address']?></td>
                       
                    </tr>
                    <?php
                        
                    }
                ?>

                <!--new-->  
                <?php
                    //$user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"restaurant");
                    $query = "select * from single where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        
                        $user_count = $user_count+1;
                        
                    
                    ?>
                    <tr>
                        <td><?php echo $user_count;?></td>
                        <td><?php echo $row['holder_name']?></td>
                        <td><?php echo $row['holder_id']?></td>
                        <td><?php echo $row['holder_mobile']?></td>
                        <td><?php echo $row['table_no']?></td>
                        <td>Single</td>
                        <td><?php echo $row['holder_address']?></td>
                       
                        
                    </tr>
                    <?php
                        
                    }
                ?>
                

                <?php
                    //$user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"restaurant");
                    $query = "select * from family where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        
                        $user_count = $user_count+1;
                        
                    
                    ?>
                    <tr>
                        <td><?php echo $user_count;?></td>
                        <td><?php echo $row['holder_name']?></td>
                        <td><?php echo $row['holder_id']?></td>
                        <td><?php echo $row['holder_mobile']?></td>
                        <td><?php echo $row['table_no']?></td>
                        <td>Family</td>
                        <td><?php echo $row['holder_address']?></td>
                       
        
                    </tr>
                    <?php
                        
                    }
                ?>

                  </table>
            </div>

        </div>
        <br><br><br><br>
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