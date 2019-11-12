<?php
session_start();

if(!isset($_SESSION["user"]))
{
    header("location:mainPage.php");
}

$productDisplay = "";
$cartOutput = "0";
$carttotal ="0";
$i=0;
$tax = "0";
$carttotal = "0";
$delivery = "0";
$checkoutbtn='';
$productQuantity="0";

if(isset($_SESSION["cart_array"])){

    foreach($_SESSION["cart_array"] as $eachitem)
    {   
        $i++;
        $pid = $eachitem['product_id'];
        $productName = $eachitem['productName'];
        $productDesc = $eachitem['productDesc'];
        $price = $eachitem['price'];

        $cartOutput = $price + $cartOutput;
        $tax = 0.05*$cartOutput;
        $tax = number_format($tax, 2);
        $carttotal = $cartOutput+5+$tax;
        $delivery = 5.00;

        
        $productDisplay .= '<div class="product">';
        $productDisplay .= '    <div class="product-image">';
        $productDisplay .= '        <img src="images/'. $pid . '.JPG" alt="'. $productName .'" class = "img-responsive">';
        $productDisplay .= '    </div>';
        $productDisplay .= '    <div class="product-details">';
        $productDisplay .= '        <div class="product-title">' . $productName . '</div>';
        $productDisplay .= '        <p class="product-description">' . $productDesc . '</p>';
        $productDisplay .= '    </div>';
        $productDisplay .= '    <div class="product-price">'. $price .'</div>';
        $productDisplay .= '    <div class="product-quantity">';
        $productDisplay .= '        <input type="number" value="1" min="1" max="10">';
        $productDisplay .= '    </div>';
        $productDisplay .= '    <div class="product-removal">';
        $productDisplay .= '    <form method="post" action="shoppingCartNel.php">';
        $productDisplay .= '                    <input type="submit" class="remove-product" name="dltBtn' . $pid . '" id="dltBtn" value="Remove"/>';
        $productDisplay .= '                    <input type="hidden" name="index" value="'. $pid . '" id="index"/>';
        $productDisplay .= '                  </form>'; 
        $productDisplay .= '    </div>';
        $productDisplay .= '    <div class="product-line-price">'.$price.'</div>';
        $productDisplay .= '</div>';  

        
   
    }
        $x=$i+1;
        $checkoutbtn.=' <div class="check-out">';
        $checkoutbtn.='<form method="post" action="payment.php">';
        $checkoutbtn.='<input type="hidden" name="item_name_'.$x.'" value="'.$productName .'">';
        $checkoutbtn.='<input type="hidden" name="amount_'.$x.'" value="'.$price .'">';
        //$checkoutbtn.='<input type="hidden" name="product-quantity'.$x.'" value="'.$eachitem['pquantity'] .'">';
        $checkoutbtn.='<input type="submit" class="checkout" name="button" value="Checkout"/>';
        $checkoutbtn.='                  </form>';    
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
    $checkoutbtn = '';
}
?>
<html>
    <head>
        <title>Welcome To Guilty Pleasures!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="css/main2.css"/>
        <link rel="stylesheet" href="css/modalcss.css"/>
        <!--<link rel="stylesheet" href="css/cusineMenu.css"/>-->
        <link rel="stylesheet" href="css/shoppingCart_1.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
        <script src="js/sideMenu.js"></script>
        <script src="js/Cart.js" async></script>

    </head>
    <body>
        
        <?php 
            include "headerLogin.php";
        ?>
    
        <!--<div class="container">

        <!--</div>-->

        <h1 style="
            padding-left: 20px;">Shopping Cart</h1>
        <div class="shopping-cart">


            <div class="column-labels">

                <label class="product-image">Image</label>
                <label class="product-details">Product</label>
                <label class="product-price">Price</label>
                <label class="product-quantity">Quantity</label>
                <label class="product-removal">Remove</label>
                <label class="product-line-price">Total</label>
            </div>
            <?php echo $productDisplay;

            ?>
            <div class="totals">
                <div class="totals-item">
                    <label>Subtotal</label>
                    <div class="totals-value" id="cart-subtotal"> <?php echo $cartOutput?></div>
                </div>
                <div class="totals-item">
                    <label>Tax (5%)</label>
                    <div class="totals-value" id="cart-tax"><?php echo $tax?></div>
                </div>
                <div class="totals-item">
                    <label>Delivery</label>
                    <div class="totals-value" id="cart-shipping"><?php echo $delivery?></div>
                </div>
                <div class="totals-item totals-item-total">
                    <label>Grand Total</label>
                    <div class="totals-value" id="cart-total"><b><?php echo $carttotal?></b></div>
                </div>
                <?php echo $checkoutbtn ?>
            </div>
        </div>
    </body>
</html>
