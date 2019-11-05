
<html>
    <head>
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
        <script src="js/cuisinesJS.js"></script>
    </head>
 
 
 
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
</html>