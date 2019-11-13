<?php
session_start();
$productDisplay = "";
$cartOutput = "0";
$carttotal ="0";
$i=0;
$tax = "0";
$carttotal = "0";
$delivery = "0";


if(isset($_SESSION["cart_array"])){

    foreach($_SESSION["cart_array"] as $eachitem)
    {   

          
        $i++;
        $pid = $eachitem['product_id'];
        $productName = $eachitem['productName'];
        $productDesc = $eachitem['productDesc'];
        $price = $eachitem['price'];
        $quantity = $eachitem['quantity'];

        $productTotal = $price* $quantity;
        $cartOutput = $productTotal + $cartOutput;
        $tax = 0.05*$cartOutput;
        $tax = number_format($tax, 2);
        $carttotal = $cartOutput+5+$tax;
        $delivery = 5.00;
        
        $productDisplay .= '<p><a href="#">'. $productName .'</a> <span class="product-price">$'.$price.'</span></p>';
        $productDisplay .= '<div class="product-quantity">Qtn x '.$eachitem['quantity'].'</div>';

    }
   
    
}

?>

<?php
   
?>
<?php
if(isset($_POST["index"]))
{
    if(isset($_SESSION["cart_array"]))
    {
        foreach($_SESSION["cart_array"] as $eachitem => $subeachitem)
        {
            $pid1 = $subeachitem['product_id'];
            if($pid1 == $_POST['index'] )
            {
                unset($_SESSION['cart_array'][$eachitem]);
                $i--;
                header("location:shoppingCartNel.php");
            }
        }
    }
}

?>

<?php
if($i<=0)
{
    $productDisplay .= '<h1 style="margin-left:50px;">Your Shopping Cart is Empty.</h1>';
}
?>
<head>
        <title>Welcome To Guilty Pleasures!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="css/main2.css"/>
        <link rel="stylesheet" href="css/modalcss.css"/>
        <!--<link rel="stylesheet" href="css/cusineMenu.css"/>-->
       
        <link rel="stylesheet" href="css/payment.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
        <script src="js/Cart.js" async></script>
        <script src="js/sideMenu.js"></script>

</head>
<body>
    <div id="mySidepanel" class="sidepanel">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <!--<a href="aboutUsCT.php" style="font-family: Times, Times New Roman, serif">Home</a>-->
        <a href="aboutUsCT.php" style="font-family: Times, Times New Roman, serif">About Us</a>
        <a href="aboutUsCT.php" style="font-family: Times, Times New Roman, serif">Cuisines</a>
        <!--<a href="#" style="font-family: Times, Times New Roman, serif">Locations</a>-->
        <a href="aboutUsCT.php" style="font-family: Times, Times New Roman, serif">Contact Us</a>
    </div>
        
    <?php 
        include "header.php";
    ?>   


    <div class="row">
        <div class="col-75">
            <div class="container">
                <form action="/action_page.php">
                    <div class="row">
                        <div class="col-50">
                            <h3>Billing Address</h3>
                                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                <input type="text" id="fname" name="firstname" pattern="[A-Za-z].{5,}" placeholder="John M. Doe">
                                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                <input type="text" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="john@example.com">
                                <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                                <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                                <label for="city"><i class="fa fa-institution"></i> City</label>
                                <input type="text" id="city" name="city" placeholder="New York">
                            <div class="row">
                                <div class="col-50">
                                    <label for="state">State</label>
                                    <input type="text" id="state" name="state" placeholder="NY">
                                </div>
                                <div class="col-50">
                                <label for="zip">Zip</label>
                                <input type="text" id="zip" name="zip" placeholder="10001">
                                </div>
                            </div>
                        </div>

                    <div class="col-50">
                        <h3>Payment</h3>
                        <label for="fname">Accepted Cards</label>
                        <div class="icon-container">
                            <i class="fa fa-cc-visa" style="color:navy;"></i>
                            <i class="fa fa-cc-amex" style="color:blue;"></i>
                            <i class="fa fa-cc-mastercard" style="color:red;"></i>
                            <i class="fa fa-cc-discover" style="color:orange;"></i>
                        </div>
                        <label for="cname">Name on Card</label>
                        <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                        <label for="ccnum">Credit card number</label>
                        <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                        <label for="expmonth">Exp Month</label>
                        <input type="text" id="expmonth" name="expmonth" placeholder="September">
                        <div class="row">
                            <div class="col-50">
                                <label for="expyear">Exp Year</label>
                                <input type="text" id="expyear" name="expyear" placeholder="2018">
                            </div>
                            <div class="col-50">
                                <label for="cvv">CVV</label>
                                <input type="text" id="cvv" name="cvv" placeholder="352">
                            </div>
                        </div>
                    </div>

                </div>
                <label>
                    <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                </label>
                    <input type="submit" value="Continue to checkout" class="btn1">
                </form>
            </div>
        </div>
        <div class="col-25">
            <div class="container">
                <h4>Shopping Cart
                    <span class="price" style="color:black">
                        <i class="fa fa-shopping-cart"></i>
                    </span>
                </h4>
                <?php echo $productDisplay ?>
                
                <hr>
                <div class="totals">
                    <div class="totals-item">
                        <label>Subtotal</label>
                        <div class="totals-value" id="cart-subtotal"><?php echo$cartOutput?></div>
                    </div>
                    <div class="totals-item">
                        <label>Tax (5%)</label>
                        <div class="totals-value" id="cart-tax"><?php echo$tax?></div>
                    </div>
                    <div class="totals-item">
                        <label>Delivery</label>
                        <div class="totals-value" id="cart-delivery"><?php echo$delivery?></div>
                    </div>
                    <div class="totals-item totals-item-total">
                        <label>Grand Total</label>
                        <div class="totals-value" id="cart-total"><?php echo$carttotal?></div>
                    </div>
                </div>
                      <hr>
            </div>
        </div>
    </div>
</body>