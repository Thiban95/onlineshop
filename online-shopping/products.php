<?php
include 'header2.php';
$cat_id = $_GET['cat_id'];
?>

<div class="main main-raised">

    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- ASIDE -->

                <!-- /ASIDE -->

                <!-- STORE -->
                <div id="store" class="col-md-9">

                    <div class="product-row-row" id="product-row">
                        <div class="col-md-12 col-xs-12" id="product_msg">
                        </div>
                        <!-- product -->
                        <!--Here we get product jquery Ajax Request-->
                        <div id="get_product" cid=<?php echo "$cat_id"; ?>>

                        </div>

                        <!-- /product -->
                    </div>
                    <!-- /store products -->

                    <!-- store bottom filter -->
                    <div class="store-filter clearfix">
                        <span class="store-qty">Showing 20-100 products</span>
                        <ul class="store-pagination" id="pageno" cid=<?php echo "$cat_id"; ?>>
                            <li><a class="active" href="#aside">1</a></li>

                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- /store bottom filter -->
                </div>
                <!-- /STORE -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
</div>
<?php
include "newslettter.php";
include "footer.php";
?>