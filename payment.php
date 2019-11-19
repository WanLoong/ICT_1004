<?php
session_start();

if(!isset($_SESSION["user"]))
{
    session_destroy();
    header("location:mainPage");
}

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
        
        $productDisplay .= '<a href="#">'. $productName .'</a> <span class="product-price">$'.$price.'</span>';
        $productDisplay .= '<div class="product-quantity">Qtn x '.$eachitem['quantity'].'</div>';
    }   
}

        $storeDiplay = "";
        include "connectmysql.php";
        $storeDisplay ="";
        $sql = "SELECT * FROM p5_6.location;";
        $result = $conn->query($sql);

         if (mysqli_num_rows($result) > 0)
        {
            while($row = $result->fetch_assoc()) {
               
                $storelocation = $row['location_name'];
                
                $storeDisplay .= "<option value=".$storelocation.">". $storelocation."</option>";
                
                
                
            }
        }
        else{
            echo "error";
        }
                    

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
                header("location:shoppingCartNel");
            }
        }
    }
}
?>

<?php
if($i<=0)
{
    $productDisplay .= '<h1>Your Shopping Cart is Empty.</h1>';
}
?>
<!DOCTYPE html>
<html>
<head>
        <title>Payment</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="css/main2.css"/>
        <link rel="stylesheet" href="css/modalcss.css"/>
         <link rel="stylesheet" href="css/payment.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
        <script src="js/sideMenu.js"></script>
        <script src="js/payment.js"></script>

        
        <!--TAGS IN HEADER LOGIN -->
    <?php 
        include "headerLogin.php";
    ?>   
    <div class="row">
        <div class="col-75">
            <div class="container">
                    <form action="process_payment" method="POST">
                    <div class="row">
                        <div class="col-50">
                            <h3>Billing Address</h3>
                                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                <input type="text" required="required"  id="fname" name="fullname" pattern="[A-Za-z].{5,}" placeholder="John M. Doe" >
                                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                <?php
                                   // echo '<input type="text" required="required" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="john@example.com" value=' . $_SESSION['email'] . '>';
                                ?>
                                <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                                <input type="text" required="required"  id="adr" name="address" placeholder="542 W. 15th Street">
                                <label for="city"><i class="fa fa-institution"></i> City</label>
                                <input type="text" required="required"  id="city" name="city" placeholder="New York">
                                <input type="hidden" required="required"  id="total" name="total" value="<?php echo $carttotal?>">
                            <div class="row">
                                <div class="col-50">
                                    <label for="state">State</label>
                                    <input type="text" required="required"  id="state" name="state" placeholder="NY">
                                </div>
                                <div class="col-50">
                                <label for="zip">Zip</label>
                                <input type="text" id="zip" required="required"  name="zip" placeholder="10001" maxlength="6">
                                </div>
                            </div>
                        </div>

                    <div class="col-50">
                        <h3>Payment</h3>
                        <label for="fname">Accepted Cards</label>
                        <div class="icon-container">
                            <i class="fab fa-cc-visa" ></i>
                            <i class="fab fa-cc-amex" ></i>
                            <i class="fab fa-cc-mastercard"></i>
                            <i class="fab fa-cc-discover"></i>
                        </div>
                        <label for="cname">Name on Card</label>
                        <input type="text" required="required"  id="cname" name="cardname" placeholder="John More Doe">
                        <label for="ccnum">Credit card number</label>
                        <input type="text" required="required"  id="ccnum" name="cardnum" placeholder="1111222233334444">
                        <label for="expmonth">Exp Month</label>
                        <input type="text" required="required"  id="expmonth" name="expmonth" placeholder="08" maxlength="2">
                        <div class="row">
                            <div class="col-50">
                                <label for="expyear">Exp Year</label>
                                <input type="text" required="required"  id="expyear" name="expyear" placeholder="19" maxlength="2">
                            </div>
                            <div class="col-50">
                                <label for="cvv">CVV</label>
                                <input type="text" required="required"  id="cvv" name="cvv" placeholder="352" maxlength="3">
                            </div>
                        </div>
                    </div>

                </div>
                    <div class="store_address">
                    <h1>Preferred delivery method</h1>
                    
                    <input type="radio" name="pickup_delivery" onclick="showText(0)" value="Store Pick up" id="storepickup" checked> Store pick up <br>   
                    
                    <select name="storeaddress" id="storeoption">
                    <?php echo $storeDisplay?>
                    </select><br>
                    <input type="radio" name="pickup_delivery" onclick="showText(1)" value="Home Delivery" id="homedelivery"> Home Delivery
                    <input type="text" id="homeaddress" class="homeaddress" name="homeaddress">
                    </div>
                    <input type="submit" value="Continue to checkout" class="btn1">
                </form>
                </div>
            </div>
        
        <div class="col-15">
            <div class="container">
                <h4>Shopping Cart
                    <span class="price" >
                        <i class="fa fa-shopping-cart"></i>
                    </span>
                </h4>
                <?php echo $productDisplay ?>
                
                <hr>
                
                <div class="totals">
                    <div class="totals-item" >
                        <label>Subtotal</label>
                        <div class="totals-value" id="cart-subtotal"><?php echo $cartOutput?></div>
                    </div>
                    <div class="totals-item">
                        <label>Tax (5%)</label>
                        <div class="totals-value" id="cart-tax"><?php echo $tax?></div>
                    </div>
                    <div class="totals-item">
                        <label>Delivery</label>
                        <div class="totals-value" id="cart-delivery"><?php echo $delivery?></div>
                    </div>
                    <div class="totals-item totals-item-total" >
                        <label>Grand Total</label>
                        <div class="totals-value" id="cart-total"><?php echo $carttotal?></div>
                    </div>
                </div>
                     
            </div>
        </div>
    </div>
<?php include "footer.php" ?>
</body>
</html>