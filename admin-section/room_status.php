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
                    <li><a href="Admin Dashboard.php">Dashboard</a></li>
                    <li><a href="rooms.php">Rooms</a></li>
                    <li><a href = "#footer">Contact</a></li>
                    <li><a href="#footer">About Us</a></li>
                </ul>
            </div>
        </div>

        <!-- end of header -->

        <!-- side navbar -->
        
        <!-- end of side navbar -->

        <!-- fullscreen modal -->
        <div id = "modal"></div>
        <!-- end of fullscreen modal -->
        
           <br><br><br>
           <div class="row">
               <div class="col-md-12">
                  <center><h3>Check Room Status</h3></center>
               </div>
               <br><br>
               
           </div>
           <br><br><br>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Room No</th>
                            <th>Room Type</th>
                            <th>Room Status</th>
                        </tr>
                    </thead>
                    <?php
                    $user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"hotel");
                    $query = "select * from doublenonac;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        
                        $user_count = $user_count+1;
                        
                    
                    ?>
                    <tr>
                        <td><?php echo $user_count;?></td>
                        <td><?php echo $row['rno']?></td>
                        <td>Double-Non-Ac</td>
                        <td><?php if ($row['status']==1){echo "Already Booked";}
                        else echo "Empty"?></td>
        
                    </tr>
                    <?php
                        
                    }
                ?>

                <!--new-->  
                <?php
                    //$user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"hotel");
                    $query = "select * from singlenonac;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        
                        $user_count = $user_count+1;
                        
                    
                    ?>
                    <tr>
                    <td><?php echo $user_count;?></td>
                        <td><?php echo $row['rno']?></td>
                        <td>Single-Non-Ac</td>
                        <td><?php if ($row['status']==1){echo "Already Booked";}
                        else echo "Empty"?></td>
                    </tr>
                    <?php
                        
                    }
                ?>
                

                <?php
                    //$user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"hotel");
                    $query = "select * from doubleac;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        
                        $user_count = $user_count+1;
                        
                    
                    ?>
                    <tr>
                    
                    <td><?php echo $user_count;?></td>
                        <td><?php echo $row['rno']?></td>
                        <td>Double-Ac</td>
                        <td><?php if ($row['status']==1){echo "Already Booked";}
                        else echo "Empty"?></td>
                        
                        
                    </tr>
                    <?php
                        
                    }
                ?>

<?php
                    //$user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"hotel");
                    $query = "select * from singleac;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        
                        $user_count = $user_count+1;
                        
                    
                    ?>
                    <tr>
                    <td><?php echo $user_count;?></td>
                        <td><?php echo $row['rno']?></td>
                        <td>Single-Ac</td>
                        <td><?php if ($row['status']==1){echo "Already Booked";}
                        else echo "Empty"?></td>
                        
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