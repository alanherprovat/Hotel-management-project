<?php include('config/constants.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>
    <link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16">
    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo1.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    
                    <li>
                        <a href="../Restaurant/Restaurant.php">Restaurant Page</a>
                    </li>
                    <li>
                        <a href="./index.php">Home</a>
                    </li>
                    <li>
                        <a href="./categories.php">Categories</a>
                    </li>
                    <li>
                        <a href="./foods.php">Foods</a>
                    </li>
                    <li>
                        <a href="#footer">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->