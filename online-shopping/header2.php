<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Online Shopping</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet" />

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link type="text/css" rel="stylesheet" href="css/accountbtn.css" />


    <meta charset="UTF8">
    <title>T-Shop Online Store | Ecommerce Website</title>
    <link rel="stylesheet" href="style.css">

    <!-- this is the font style used for this website  -->
    <link href="https://fonts.googleapis.com/css2?
    family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- this is the font and styling used for rating  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        #navigation {
            background: #FF4E50;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #F9D423, #FF4E50);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #F9D423, #FF4E50);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


        }

        #header {

            background: #780206;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #061161, #780206);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #061161, #780206);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


        }

        #top-header {


            background: #870000;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #190A05, #870000);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #190A05, #870000);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


        }

        #footer {
            background: #7474BF;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #348AC7, #7474BF);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #348AC7, #7474BF);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


            color: #1E1F29;
        }

        #bottom-footer {
            background: #7474BF;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #348AC7, #7474BF);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #348AC7, #7474BF);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


        }

        .footer-links li a {
            color: #1E1F29;
        }

        .mainn-raised {

            margin: -7px 0px 0px;
            border-radius: 6px;
            box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);

        }

        .glyphicon {
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .glyphicon-chevron-left:before {
            content: "\f053"
        }

        .glyphicon-chevron-right:before {
            content: "\f054"
        }
    </style>


</head>

<div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="img/logo.png" width="125px">
            </div>
            <nav>
                <ul id="get_category_home">

                </ul>

            </nav>


            <div class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                    <!-- <i class="fa fa-shopping-cart"></i>
                        <span>Your Cart</span> -->
                    <img src="img/cart.png" width="30px" height="30px">
                    <div class="badge qty">0</div>
                </a>
                <div class="cart-dropdown">
                    <div class="cart-list" id="cart_product">


                    </div>

                    <div class="cart-btns">
                        <a href="cart.php" style="width:100%;"><i class="fa fa-edit"></i> edit cart</a>
                    </div>

                </div>

                <ul class="header-links pull-right">

                    <li>
                        <?php

                        include "db.php";
                        if (isset($_SESSION["uid"])) {
                            $sql = "SELECT first_name FROM user_info WHERE user_id='$_SESSION[uid]'";
                            $query = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($query);

                            echo '
           <div class="dropdownn">
              <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> Good Day </a>
              <div class="dropdownn-content">
                  <a href="myorders.php"  ><i class="fa fa-shopping-basket" aria-hidden="true"></i>My Order</a>
        
                <a href="logout.php"  ><i class="fa fa-sign-in" aria-hidden="true"></i>Log out</a>
                
              </div>
            </div>';

                        } else {
                            echo '
            <div class="dropdownn">
              <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> My Account</a>
              <div class="dropdownn-content">
                  <a href="admin/login.php" ><i class="fa fa-user" aria-hidden="true" ></i>Admin</a>
                <a href="signin_form.php"><i class="fa fa-sign-in" aria-hidden="true" ></i>Login</a>
                <a href="signup_form.php"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a>
                
              </div>
            </div>';

                        }
                        ?>

                    </li>
                </ul>

            </div>

        </div>
    </div>
</div>



<!-- NAVIGATION -->

<div class="modal fade" id="Modal_login" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <?php
                include "login_form.php";
                ?>

            </div>

        </div>

    </div>
</div>
<div class="modal fade" id="Modal_register" role="dialog">
    <div class="modal-dialog" style="">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <?php
                include "register_form.php";

                ?>

            </div>

        </div>

    </div>
</div>