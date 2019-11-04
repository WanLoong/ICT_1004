<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Welcome To Guilty Pleasures!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="css/main2.css"/>
        <link rel="stylesheet" href="css/modalcss.css"/>
        <link rel="stylesheet" href="css/cusineMenu_1.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
        <script src="js/sideMenu.js"></script>

    </head>
    <body>
        <?php
        // put your code here
        ?>

        <div id="mySidepanel" class="sidepanel">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <a href="aboutUsCT.php" style="font-family: Times, Times New Roman, serif">About Us</a>
            <a href="cuisinesKQ.php" style="font-family: Times, Times New Roman, serif">Cuisines</a>
            <!--<a href="#" style="font-family: Times, Times New Roman, serif">Locations</a>-->
            <a href="aboutUsCT.php" style="font-family: Times, Times New Roman, serif">Contact Us</a>
        </div>

        <?php
        include "header.php";
        ?>
    
        <!-- Header -->
        <header>
            <section class="whatsonmenu">
                <h1>What's on menu?</h1>
            </section>
        </header>
        <!--Menu Category Selection-->
        <section class="menu-theme">
            <div class="container">
                <div class="row">
                    <!-- Chinese selection-->
                    <div class="col-md-6">
                        <div class="ChineseMenu">
                            <h3 class="changecolor">Chinese</h3>   
                            <!-- set Max-width/Zoom in image -->
                            <div class='image-box'>
                                <!-- Clickable link -->
                                <a href="#chinesefood">
                                    <img onmouseover="textBold(0)" onmouseout="textNotBold(0)" src="images/Chinese.jpg" alt="Chinese Menu">
                                </a>
                            </div>

                        </div>
                    </div>
                    <!-- Halal Selection -->
                    <div class="col-md-6">
                        <div class="IMMenu">
                            <h3 class="changecolor">Halal</h3>
                            <!-- Set max-width/Zoom in Image-->
                            <div class='image-box'>
                                <a href="#IMfood">
                                    <img onmouseover="textBold(1)" onmouseout="textNotBold(1)" src="images/IMCuisine1.jpg" alt="Indian Menu">
                                </a>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </section>
        <!-- Chinese Food Menu-->
        <section id="chinesefood">
            <div class="container">
                <!-- Chinese Food Menu Header/Description-->
                <div class="menu-top col-sm-12">
                    <h2>Chinese<span class="fas fa-bacon"></span></h2>
                    <h6>Tantalize your taste buds with our delectable choices of Chinese dishes!!
                    </h6>
                    <!-- Bootstrap class fixing overflow-->
                    <div class="clearfix"></div>
                </div>
                <!-- Chinese Menu Items-->
                <div class="main-menu">
                    <!-- Heading-->
                    <h3>Rice Sets</h3>
                    <!-- Row 1 Column 1 -->
                    <div class="col-md-4 menu-bottom1">
                        <!-- Food items-->
                        <img src="images/YZFriedRice.JPG" alt="Yangzhou Fried Rice" class = "img-responsive">
                        <h4>Yangzhou Fried Rice</h4>
                        <p>$20.00</p>
                        <!-- shopping cart button-->
                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal30">Add to shopping cart</button>

                        <!-- Modal / Popup -->
                        <div class="modal fade" id="myModal30" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Shopping Cart</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <h2>Yangzhou Fried Rice</h2>
                                        <section class="containbody">
                                            <img src="images/YZFriedRice.JPG" alt="" >
                                            <p>Fried rice dish that features egg along with leftover bits of ham, shrimp and meat.</p>
                                        </section>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info btn-default modalButton" data-toggle="modal" data-target="#myModal30" id="modalButton">Add to shopping cart</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                    </div>
                    <!-- Row 1 column 2-->
                    <div class="col-md-4 menu-bottom1">
                        <!-- Food items-->
                        <img src="images/VegeFriedRice.JPG" alt="Vegetarian Fried Rice" class="img-responsive">
                        <h4>Vegetarian Fried Rice</h4>
                        <p>$20.00</p>   
                        <!-- Shopping cart button -->
                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal1">Add to shopping cart</button>

                        <!-- Modal / Popup -->
                        <div class="modal fade" id="myModal1" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Shopping Cart</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <h2>Vegetarian Fried Rice</h2>
                                        <section class="containbody">
                                            <img src="images/VegeFriedRice.JPG" alt="" >
                                            <p>This dish combines the fresh taste of bell peppers, baby peas, and other vegetables.</p>
                                        </section>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info btn-default" data-toggle="modal" data-target="#myModal1" id="modalButton2">Add to shopping cart</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                    </div>
                    <!-- Row 1 column 3-->
                    <div class="col-md-4 menu-bottom1">
                        <!-- Food items-->
                        <img src="images/PRYBBRice.JPG" alt="Pork Rib, Yam & Black Beans w rice" class="img-responsive">
                        <h4>Pork Spare-ribs with Rice</h4>
                        <p>$20.00</p>                 
                        <!-- Shopping cart button -->
                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal2">Add to shopping cart</button>
                        <!-- Modal / Popup -->
                        <div class="modal fade" id="myModal2" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Shopping Cart</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <h2>Pork Spare-ribs with Rice</h2>
                                        <section class="containbody">
                                            <img src="images/PRYBBRice.JPG" alt="" >
                                            <p>Combination of Juicy pork ribs, Black Beans and flavorful sauce, they’re perfect with rice.<p/>
                                        </section>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info btn-default" data-toggle="modal" data-target="#myModal2" id="modalButton3">Add to shopping cart</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- Chinese Menu Row 2-->
                <div class="main-menu">
                    <!-- Row 2 Column 1-->
                    <h3>Noodles Sets</h3>
                    <div class="col-md-4 menu-bottom1">
                        <!-- Food Items-->
                        <img src="images/BraisedBeefNoodle.JPG" alt="Braised Beef Noodle" class="img-responsive">
                        <h4>Braised Beef Noodles</h4>
                        <p>$20.00</p>
                        <!-- Shopping cart button -->
                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal3">Add to shopping cart</button>

                        <!-- Modal / Popup -->
                        <div class="modal fade" id="myModal3" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Shopping Cart</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <h2>Braised Beef Noodles</h2>
                                        <section class="containbody">
                                            <img src="images/BraisedBeefNoodle.JPG" alt="" >
                                            <p>Flavorful, clear broth, shaved beef, tender Chinese radish slices, lots of cilantro and scallion, deep red chili oil, and chewy handmade noodles</p>
                                        </section>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info btn-default" data-toggle="modal" data-target="#myModal3" id="modalButton4">Add to shopping cart</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                    </div>
                    <!-- Row 2 Column 2-->
                    <div class="col-md-4 menu-bottom1">
                        <!-- Food items-->
                        <img src="images/SpicyBBQPorkStewNoodle.JPG" alt="Spicy BBQ Pork Stew Noodle" class="img-responsive">
                        <h4>Spicy Barbeque Pork Stew Noodles</h4>
                        <p>$20.00</p>
                        <!-- Shopping cart button -->
                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal4">Add to shopping cart</button>

                        <!-- Modal / Popup -->
                        <div class="modal fade" id="myModal4" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Shopping Cart</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <h2>Spicy Barbeque Pork Stew Noodles</h2>
                                        <section class="containbody">
                                            <img src="images/SpicyBBQPorkStewNoodle.JPG" alt="" >
                                            <p>`Heavenly barbeque pork dipped in spicy prawn paste with handmade noodles</p>
                                        </section>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info btn-default" data-toggle="modal" data-target="#myModal4" id="modalButton5">Add to shopping cart</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                    </div>
                    <!-- Row 2 Column 3-->
                    <div class="col-md-4 menu-bottom1">
                        <!--Food Items-->
                        <img src="images/HKWantonNoodle.JPG" alt="Hong Kong Style Wonton Noodle Soup" class="img-responsive">
                        <h4>HK-Style Wonton Noodles</h4>
                        <p>$20.00</p>
                        <!-- Shopping cart button -->
                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal5">Add to shopping cart</button>

                        <!-- Modal / Popup -->
                        <div class="modal fade" id="myModal5" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Shopping Cart</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <h2>HK-Style Wonton Noodles</h2>
                                        <section class="containbody">
                                            <img src="images/HKWantonNoodle.JPG" alt="" >
                                            <p>Clear pork-based broth with egg noodles, ground pork, chives and various meats and toppings</p>
                                        </section>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info btn-default" data-toggle="modal" data-target="#myModal5" id="modalButton6">Add to shopping cart</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- Chinese Menu Row 3-->
                <div class="main-menu">
                    <!-- Row 3 Column 1-->
                    <h3>Appetizers/Desserts</h3>
                    <div class="col-md-4 menu-bottom1">
                        <!-- Food items-->
                        <img src="images/HKStyleEggTarts.JPG" alt="Hong Kong Style Egg Tart" class="img-responsive">
                        <h4>HK-Style Egg Tart</h4>
                        <p>$20.00</p>
                        <!-- Shopping cart button -->
                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal6">Add to shopping cart</button>

                        <!-- Modal / Popup -->
                        <div class="modal fade" id="myModal6" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Shopping Cart</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <h2>HK-Style Egg Tart</h2>
                                        <section class="containbody">
                                            <img src="images/HKStyleEggTarts.JPG" alt="" >
                                            <p>Traditional baked HK-style pastry with buttery base and soft egg custards</p>
                                        </section>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info btn-default" data-toggle="modal" data-target="#myModal6" id="modalButton7">Add to shopping cart</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                    </div>
                    <!-- Row 3 Column 2-->
                    <div class="col-md-4 menu-bottom1">
                        <!-- Food Items-->
                        <img src="images/DeepFriedMilkCustard.JPG" alt="Deep Fried Milk Custard" class="img-responsive">
                        <h4>Deep Fried Milk Custard</h4>
                        <p>$20.00</p>
                        <!-- Shopping cart button -->
                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal7">Add to shopping cart</button>

                        <!-- Modal / Popup -->
                        <div class="modal fade" id="myModal7" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Shopping Cart</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <h2>Deep Fried Milk Custard</h2>
                                        <section class="containbody">
                                            <img src="images/DeepFriedMilkCustard.JPG" alt="" >
                                            <p>Oozing thickened milk is dipped in a beer batter and deep fried. Delicious and surprising!</p>
                                        </section>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info btn-default" data-toggle="modal" data-target="#myModal7" id="modalButton8">Add to shopping cart</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Row 3 Column 3-->
                    <div class="col-md-4 menu-bottom1">
                        <!-- Food item-->
                        <img src="images/MangoSago.JPG" alt="Mango Sago" class="img-responsive">
                        <h4>Mango Sago</h4>
                        <p>$20.00</p>
                        <!-- Shopping cart button -->
                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal8">Add to shopping cart</button>

                        <!-- Modal / Popup -->
                        <div class="modal fade" id="myModal8" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Shopping Cart</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <h2>Mango Sago</h2>
                                        <section class="containbody">
                                            <img src="images/MangoSago.JPG" alt="" >
                                            <p>Smooth mango puree flavoured with coconut, garnished with grapefruit and accompanied by soft tapioca pearls</p>
                                        </section>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info btn-default" data-toggle="modal" data-target="#myModal8" id="modalButton9">Add to shopping cart</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </section>
        <!-- Halal Menu-->
        <section id="IMfood" style="margin-bottom: 25px;">
            <!-- Bootstrap container for Column-->
            <div class="container">
                <!-- Column for dynamic bootstrap properties-->
                <div class="menu-top col-sm-12">
                    <h2>Halal<span class="fas fa-bacon"></span></h2>
                    <h6>Tantalize your taste buds with our delectable choices of Halal dishes!!
                    </h6>
                    <div class="clearfix"></div>
                </div>
                <!-- Halal Food menu Row 1-->
                <div class="main-menu">
                    <h3>Bread/Naan</h3>
                    <!-- Row 1 Column 1-->
                    <div class="col-md-4 menu-bottom1">
                        <!-- Food Items-->
                        <img src="images/PlainNaan.JPG" alt="Plain Naan" class="img-responsive">
                        <h4>Plain Naan</h4>
                        <p>$20.00</p>
                        <!-- Shopping cart button -->
                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal9">Add to shopping cart</button>

                        <!-- Modal / Popup -->
                        <div class="modal fade" id="myModal9" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Shopping Cart</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <h2>Plain Naan</h2>
                                        <section class="containbody">
                                            <img src="images/PlainNaan.JPG" alt="" >
                                            <p>Leavened, oven-baked flatbread </p>
                                        </section>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info btn-default" data-toggle="modal" data-target="#myModal9" id="modalButton10">Add to shopping cart</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Row 1 Column 2-->
                    <div class="col-md-4 menu-bottom1">
                        <!-- Food items-->
                        <img src="images/KeemaNaan.JPG" alt="Keema Naan" class="img-responsive">
                        <h4>Keema Naan</h4>
                        <p>$20.00</p>
                        <!-- Shopping cart button -->
                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal10">Add to shopping cart</button>

                        <!-- Modal / Popup -->
                        <div class="modal fade" id="myModal10" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Shopping Cart</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <h2>Keema Naan</h2>
                                        <section class="containbody">
                                            <img src="images/KeemaNaan.JPG" alt="" >
                                            <p>Keema Naan - Perfectly cooked lamb stuffed flatbread </p>
                                        </section>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info btn-default" data-toggle="modal" data-target="#myModal10" id="modalButton11">Add to shopping cart</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Row 1 column 3-->
                    <div class="col-md-4 menu-bottom1">
                        <!-- Food items-->
                        <img src="images/KashmiriNaan.JPG" alt="Kashmiri Naan" class="img-responsive">
                        <h4>Kashmiri Naan</h4>
                        <p>$20.00</p>
                        <!-- Shopping cart button -->
                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal11">Add to shopping cart</button>

                        <!-- Modal / Popup -->
                        <div class="modal fade" id="myModal11" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Shopping Cart</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <h2>Kashimiri Naan</h2>
                                        <section class="containbody">
                                            <img src="images/KashmiriNaan.JPG" alt="" >
                                            <p>Kashmiri naan stuffed with a sweet cashew, almond and cherry paste.</p>
                                        </section>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info btn-default" data-toggle="modal" data-target="#myModal11" id="modalButton12">Add to shopping cart</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- Halal Food Menu Row 2 -->
                <div class="main-menu">
                    <h3>Rice Sets</h3>
                    <!-- Row 2 column 1-->
                    <div class="col-md-4 menu-bottom1">
                        <!-- Food items-->
                        <img src="images/JeeraRice.JPG" alt="Jeera Rice" class="img-responsive">
                        <h4>Jeera Rice</h4>
                        <p>$20.00</p>
                        <!-- Shopping cart button -->
                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal12">Add to shopping cart</button>

                        <!-- Modal / Popup -->
                        <div class="modal fade" id="myModal12" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Shopping Cart</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <h2>Jeera Rice</h2>
                                        <section class="containbody">
                                            <img src="images/JeeraRice.JPG" alt="" >
                                            <p>Flavored Indian rice dish made by cooking basmati rice with ghee, cumin & other fragrant spices</p>
                                        </section>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info btn-default" data-toggle="modal" data-target="#myModal12" id="modalButton13">Add to shopping cart</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Row 2 column 2-->
                    <div class="col-md-4 menu-bottom1">
                        <!-- Food items-->
                        <img src="images/SaffronRice.JPG" alt="Saffron Rice" class="img-responsive">
                        <h4>Saffron Rice</h4>
                        <p>$20.00</p>
                        <!-- Shopping cart button -->
                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal13">Add to shopping cart</button>

                        <!-- Modal / Popup -->
                        <div class="modal fade" id="myModal13" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Shopping Cart</h4> 
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <h2>Saffron Rice</h2>
                                        <section class="containbody">
                                            <img src="images/SaffronRice.JPG" alt="" >
                                            <p>A dish made from saffron, white rice and also usually vegetable bouillon</p>
                                        </section>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info btn-default" data-toggle="modal" data-target="#myModal13" id="modalButton14">Add to shopping cart</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!--Row 2 Column 3-->
                    <div class="col-md-4 menu-bottom1">
                        <!-- Food items-->
                        <img src="images/PurdahBriyani.JPG" alt="Purdah Briyani" class="img-responsive">
                        <h4>Purdah Briyani</h4>
                        <p>$20.00</p>
                        <!-- Shopping cart button -->
                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal14">Add to shopping cart</button>

                        <!-- Modal / Popup -->
                        <div class="modal fade" id="myModal14" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Shopping Cart</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <h2>Purdah Briyani</h2>
                                        <section class="containbody">
                                            <img src="images/PurdahBriyani.JPG" alt="" >
                                            <p>The King of rice dishes – cooking a biryani is like doing a Rembrandt, a work of art.</p>
                                        </section>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info btn-default" data-toggle="modal" data-target="#myModal14" id="modalButton15">Add to shopping cart</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- Halal Food Menu Row 3-->
                <div class="main-menu">
                    <h3>Tandoori Sets</h3>
                    <!-- Row 3 Column 1-->
                    <div class="col-md-4 menu-bottom1">
                        <!-- Food items-->
                        <img src="images/ButterChicken.JPG" alt="Butter Chicken" class="img-responsive">
                        <h4>Butter Chicken</h4>
                        <p>$20.00</p>
                        <!-- Shopping cart button -->
                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal15">Add to shopping cart</button>

                        <!-- Modal / Popup -->
                        <div class="modal fade" id="myModal15" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Shopping Cart</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <h2>Butter Chicken</h2>
                                        <section class="containbody">
                                            <img src="images/ButterChicken.JPG" alt="" >
                                            <p>A super easy, full flavoured Butter Chicken recipe that rivals any restaurant or take out!</p>
                                        </section>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info btn-default" data-toggle="modal" data-target="#myModal15" id="modalButton16">Add to shopping cart</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Row 3 Column 2-->
                    <div class="col-md-4 menu-bottom1">
                        <!-- Food items-->
                        <img src="images/MalabarFishCurry.JPG" alt="Malabar Fish Curry" class="img-responsive">
                        <h4>Malabar Fish Curry</h4>
                        <p>$20.00</p>
                        <!-- Shopping cart button -->
                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal16">Add to shopping cart</button>

                        <!-- Modal / Popup -->
                        <div class="modal fade" id="myModal16" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Shopping Cart</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <h2>Malabar Fish Curry</h2>
                                        <section class="containbody">
                                            <img src="images/MalabarFishCurry.JPG" alt="" >
                                            <p>Malabar matthi curry, also known as fish curry, is an Indian dish. It consists of sardines semi-stewed in a Kerala-style curry with assorted vegetables, such as okra or onions</p>
                                        </section>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info btn-default" data-toggle="modal" data-target="#myModal16" id="modalButton17">Add to shopping cart</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Row 3 Column 3-->
                    <div class="col-md-4 menu-bottom1">
                        <!-- Food items-->
                        <img src="images/MalabarPrawnCurry.JPG" alt="Malabar Prawn Curry" class="img-responsive">
                        <h4>Malabar Prawn Curry</h4>
                        <p>$20.00</p>
                        <!-- Shopping cart button -->
                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal23">Add to shopping cart</button>

                        <!-- Modal / Popup -->
                        <div class="modal fade" id="myModal23" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Shopping Cart</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <h2>Malabar Prawn Curry</h2>
                                        <section class="containbody">
                                            <img src="images/MalabarPrawnCurry.JPG" alt="" >
                                            <p>Succulent, crisp shrimp in a spicy sauce with ground red chilies, tangy tamarind, balanced with nutty aromatic fenugreek seeds.</p>
                                        </section>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info btn-default" data-toggle="modal" data-target="#myModal23" id="modalButton18">Add to shopping cart</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div
                <!-- Halal Food Menu Row 4-->
                <div class="main-menu">
                    <h3>Curry Sets</h3>
                    <!-- Row 4 Column 1-->
                    <div class="col-md-4 menu-bottom1">
                        <!-- Food Items-->
                        <img src="images/ChickenTandoori.JPG" alt="Chicken Tandoori" class="img-responsive">
                        <h4>Chicken Tikka</h4>
                        <p>$20.00</p>
                        <!-- Shopping cart button -->
                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal17">Add to shopping cart</button>

                        <!-- Modal / Popup -->
                        <div class="modal fade" id="myModal17" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Shopping Cart</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <h2>Chicken Tikka</h2>
                                        <section class="containbody">
                                            <img src="images/ChickenTandoori.JPG" alt="" >
                                            <p>Chicken Tikka Masala--chicken marinated in yogurt and spices and then served in a tomato cream sauce</p>
                                        </section>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info btn-default" data-toggle="modal" data-target="#myModal17" id="modalButton19">Add to shopping cart</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Row 4 Column 2-->
                    <div class="col-md-4 menu-bottom1">
                        <!-- Food items -->
                        <img src="images/FishTandoori.JPG" alt="BBQ Fish Tandoori" class="img-responsive">
                        <h4>Machhi Dil Se</h4>
                        <p>$20.00</p>
                        <!-- Shopping cart button -->
                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal18">Add to shopping cart</button>

                        <!-- Modal / Popup -->
                        <div class="modal fade" id="myModal18" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Shopping Cart</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <h2>Machchi Dil Se</h2>
                                        <section class="containbody">
                                            <img src="images/FishTandoori.JPG" alt="" >
                                            <p>Chef’s special – Aromas from the fresh Dil leaves, tender fish cubes; what more can we say?</p>
                                        </section>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info btn-default" data-toggle="modal" data-target="#myModal18" id="modalButton20">Add to shopping cart</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Row 4 column 3-->
                    <div class="col-md-4 menu-bottom1">
                        <!-- Food items-->
                        <img src="images/VegeterianTandoori.JPG" alt="Vegeterian Tandoori" class="img-responsive">
                        <h4>Vegeterian - Malai Brocolli</h4>
                        <p>$20.00</p>
                        <!-- Shopping cart button -->
                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal19">Add to shopping cart</button>

                        <!-- Modal / Popup -->
                        <div class="modal fade" id="myModal19" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Shopping Cart</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <h2>Vegeterian - Malai Brocolli</h2>
                                        <section class="containbody">
                                            <img src="images/VegeterianTandoori.JPG" alt="" >
                                            <p>Flowerets of Brocolli, fresh cream, white pepper – a classic combination.</p>
                                        </section>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info btn-default" data-toggle="modal" data-target="#myModal19" id="modalButton21">Add to shopping cart</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- Halal Food Menu Row 5-->
                <div class="main-menu">
                    <h3>Appetizers/Desserts</h3>
                    <!-- Row 5 Column 1-->
                    <div class="col-md-4 menu-bottom1">
                        <!-- Food items-->
                        <img src="images/KesariPhirnee.JPG" alt="Rice Cream Milk Magical Combination" class="img-responsive">
                        <h4>Kesari Phirnee</h4>
                        <p>$20.00</p>
                        <!-- Shopping cart button -->
                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal20">Add to shopping cart</button>

                        <!-- Modal / Popup -->
                        <div class="modal fade" id="myModal20" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Shopping Cart</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <h2>Kesari Phirnee</h2>
                                        <section class="containbody">
                                            <img src="images/KesariPhirnee.JPG" alt="" >
                                            <p>A classic Indian dessert made with milk and saffron and served in earthen pots</p>
                                        </section>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info btn-default" data-toggle="modal" data-target="#myModal20" id="modalButton22">Add to shopping cart</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Row 5 Column 2-->
                    <div class="col-md-4 menu-bottom1">
                        <!-- Food items-->
                        <img src="images/GulabJamun.JPG" alt="3 pcs of comfort dessrt-khova-a sweet Indian cheese, deep fried and dipped in honey sauce" class="img-responsive">
                        <h4>Gulab Jamun</h4>
                        <p>$20.00</p>
                        <!-- Shopping cart button -->
                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal21">Add to shopping cart</button>

                        <!-- Modal / Popup -->
                        <div class="modal fade" id="myModal21" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Shopping Cart</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <h2>Gulab Jamun</h2>
                                        <section class="containbody">
                                            <img src="images/GulabJamun.JPG" alt="" >
                                            <p>A classic Indian dessert made with milk and saffron and served in earthen pots</p>
                                        </section>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info btn-default" data-toggle="modal" data-target="#myModal21" id="modalButton23">Add to shopping cart</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Row 5 Column 3-->
                    <div class="col-md-4 menu-bottom1">
                        <!-- Food items-->
                        <img src="images/RasMalai.JPG" alt="Wonderfully sinful-ask any Indian-cottage cheese dumplings in a milk and saffron combination" class="img-responsive">
                        <h4>Ras Malai</h4>
                        <p>$20.00</p>
                        <!-- Shopping cart button -->
                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal22">Add to shopping cart</button>

                        <!-- Modal / Popup -->
                        <div class="modal fade" id="myModal22" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Shopping Cart</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <h2>Ras Malai</h2>
                                        <section class="containbody">
                                            <img src="images/RasMalai.JPG" alt="" >
                                            <p>Bengali dessert has been described as "a rich cheese cake without a crust"</p>
                                        </section>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info btn-default" data-toggle="modal" data-target="#myModal22" id="modalButton24">Add to shopping cart</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </section>

        <!-- Bootstrap Modal -->
        <div id="myModal" class="modal fade" role="dialog">  
            <div class="modal-dialog">
                <div class="modal-content">      
                    <div class="modal-header" style="display:inline;">        
                        <button type="button" class="close" data-dismiss="modal">×</button>        
                        <h4 class="modal-title">Log in with your Username</h4>      
                    </div>

                    <div class="modal-body">        
                        <table>          
                            <tbody>            
                                <tr>              
                                    <td>                
                                        <input type="text" id="userNameTextBox" placeholder="Username" />              
                                    </td>            
                                </tr>            
                                <tr>              
                                    <td>                
                                        <span id="userNamSpan"></span>              
                                    </td>            
                                </tr>            
                                <tr>              
                                    <td>                
                                        <input type="text" id="passwordTextBox" placeholder="Password" />              
                                    </td>            
                                </tr>            
                                <tr>              
                                    <td>                
                                        <span id="passwordSpan"></span>              
                                    </td>            
                                </tr>            
                                <tr>              
                                    <td>                
                                        <input type="button" id="submitButton" value="Login" />              
                                    </td>            
                                </tr>            
                                <tr>              
                                    <td>                
                                        <span id="messageSpan"></span>              
                                    </td>            
                                </tr>            
                                <tr>              
                                    <td>                
                                        <img id="loadingImg" src="loading.gif" />              
                                    </td>           
                                </tr>          
                            </tbody>        
                        </table>      
                    </div>
                    <div class="modal-footer">      
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>    
                    </div> 


                </div>
            </div>
        </div>

         <?php       
            include "footer.php";
        ?>
        <!--<footer class="page-footer font-small blue" style="background: white;margin-top: 30px">

    <div class="footer-copyright text-center py-3">© 2019 Copyright:
        <a href="https://mdbootstrap.com/education/bootstrap/">Guilty Pleasures!</a>
    </div>

</footer>-->



        <script>
            function textBold(x) {
                if (x == "0") {
                    document.getElementsByClassName("changecolor")[0].style.color = "black";
                } else if (x == "1")
                {
                    document.getElementsByClassName("changecolor")[1].style.color = "black"
                }
            }
            function textNotBold(x) {
                if (x == "0") {
                    document.getElementsByClassName("changecolor")[0].style.color = "#adadad";
                } else if (x == "1")
                {
                    document.getElementsByClassName("changecolor")[1].style.color = "#adadad";
                }
            }


            document.getElementById("modalButton").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton2").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton3").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton4").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton5").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton6").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton7").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton8").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton9").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton10").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton11").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton12").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton13").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton14").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton15").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton16").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton17").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton18").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton19").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton20").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton21").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton22").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton23").onclick = function () {
                location.href = "shoppingCartNel.php";
            };
            document.getElementById("modalButton24").onclick = function () {
                location.href = "shoppingCartNel.php";
            };


        </script>


    </body>


</html>
