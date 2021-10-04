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
                    <li><a href="#rooms">Rooms</a></li>
                    <li><a href="#footer">About Us</a></li>
                </ul>
            </div>
        </div>

       
<?php include('connection.php');?>
<div class="main-content" id="add-cat">
    <div class="wrapper">
        <h1>Add New Room</h1>

        <?php 
        
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            } 
        
        ?>

        <br><br>

        
        <form action="" method="POST" enctype="multipart/form-data">

            <table class="tbl-30" id="tableview">
                <tr>
                    <td><b>New Room Number</b></td>
                    <td>
                        <input style="margin-left:2em" type="Number" name="rno" placeholder="Room no" required="">
                    </td>
                </tr>
                <br>

                <tr>
                    <td><b>Select Room Type</b> </td>
                    <td>
                        <input style="margin-left:2em" type="radio" name="SA" value="singlenonac"> Single Non Ac 
                        <input style="margin-left:2em" type="radio" name="SA" value="singleac"> Single Ac 
                        <input style="margin-left:2em" type="radio" name="SA" value="doublenonac"> Double Non Ac 
                        <input style="margin-left:2em" type="radio" name="SA" value="doubleac"> Double Ac 
                        
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Room" class="btn btn-secondary">
                    </td>
                </tr>

            </table>

        </form>
      

        <?php 
        
        
            if(isset($_POST['submit']))
            {
                
                $rno = $_POST['rno'];
               $rt=$_POST['SA'];
               
               //$connection=mysqli_connect("localhost","root","");
               $db = mysqli_connect('localhost', 'root', '', 'hotel');
               mysqli_set_charset($db, 'utf8');
               $sql = mysqli_query($db,"SELECT * FROM $rt WHERE rno=$rno");
               //$sql = mysqli_select_db($connection,"hotel");
                $sql = mysqli_fetch_assoc($sql);
                $Checker = $sql['rno'];

                if  ($Checker != NULL) {
    
                    echo "<script> alert ('Room already exist');</script>";
    
                } else {



                $sql = "INSERT INTO $rt SET 
                    rno=$rno,
                    holder_name='',
                    holder_id=0,
                    holder_mobile='',
                    holder_add='',
                    in_date='0000-00-00',
                    out_date='0000-00-00',
                    status=0
                ";


              
                $res = mysqli_query($con, $sql);
                }
        
                if($res==true)
                {
                    
                    $_SESSION['add'] = "<div class='success'>Room Added Successfully.</div>";
                    //echo '<script>alert("Room Has Been Booked Successfully")</script>';
                    header('location:Admin Dashboard.php');
                }
                else
                {
                   
                    $_SESSION['add'] = "<div class='error'>Failed to Add Room</div>";
                    header('location:Add room.php');
                }
            }
        
        ?>

    </div>
</div>

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