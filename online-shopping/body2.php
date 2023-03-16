<?php
$cat_id = 3;
$w_cat_id = 3;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF8">
    <title>T-Shop Online Store | Ecommerce Website</title>
    <link rel="stylesheet" href="style.css">

    <!-- this is the font style used for this website  -->
    <link href="https://fonts.googleapis.com/css2?
    family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- this is the font and styling used for rating  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    body {
        /* background-color: lightblue !important; */
    }
    </style>
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <h1>New Clothes, New Passion</h1>
                    <p> Happy Holiday Deals With 20% Discount When you Sign up</p>
                    <a href="" class="btn">Explore Now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="img/background.png">
                </div>
            </div>
        </div>
    </div>

    <div style="background-color:white">
        <div class="categories">
            <div class="small-container">
                <div class="row">
                    <div class="col-3">
                        <img src="img/category-1.jpg">
                    </div>
                    <div class="col-3">
                        <img src="img/category-2.jpg">
                    </div>
                    <div class="col-3">
                        <img src="img/category-3.jpg">
                    </div>
                    <div class="col-3">
                        <img src="img/category-4.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- our featured products (banner) -->

    <div class="small-container">
        <!-- header 2 as banner  -->
        <h2 class="title">Featured Products</h2>
        <div class="row">

            <div id="get_product" cid=<?php echo "$cat_id"; ?>>

            </div>
        </div>

    </div>

    <!-- offer products  -->
    <div class="offer">
        <div class="small container">
            <div class="row">
                <div class="col-2">
                    <img src="img/exclusive.png" class="offer-img">
                </div>

                <div class="col-2">
                    <p>Exclusively offer with T-shop</p>
                    <h1>Smart Watch Band 4</h1>
                    <!-- offer products description -->
                    <normal>The Mi Smart Band 4 features a 39.9% larger (than Mi Band 3)
                        AMOLED color full-touch display with adjustable brightness, so everything is clear as can be.
                    </normal>
                    <a href="" class="btn">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
    </div>

    <!-- testimonial  time 51.56 sec-->

    <div class="testimonial">
        <div class="small container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Xiaomi Mi Band 3 was one of the best value fitness trackers of 2018, and the Mi Band 4 aims to
                        improve on it in a few key ways.
                        It has a better display and more activity profiles, but with those things comes a slight price
                        bump,
                        though the Mi Band 4 is still significantly cheaper than other fitness trackers with similar
                        feature sets.
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="img/user-1.png">
                    <h3>Samantha Ruth</h3>
                </div>

                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>
                        1. Same strap fitting as Mi Band 3 <br>
                        2. Larger 0.95-inch display <br>
                        3. Up to 400 nits brightness <br>
                        The Xiaomi Mi Band 4's design is clean, simple and looks perfect
                        nothing short of run-of-the-mill until the display is fired up in its full-color glory.<br>
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <img src="img/user-2.png">
                    <h3>Manu Rios</h3>
                </div>

                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Let's be honest: None of Xiaomi's Mi Band devices have ever been the most well-designed pieces of
                        tech,
                        but the Mi Band 4 is an improvement. It's still one of the more generic-looking fitness trackers
                        out there with its simple black band and unassuming case,
                        but the improved display saves the Mi Band 4's design, in my opinion.
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="img/user-3.png">
                    <h3>Alia Bharr</h3>
                </div>


            </div>
        </div>
    </div>





</body>

</html>