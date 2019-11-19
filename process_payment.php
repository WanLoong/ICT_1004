<?php
session_start();
if(!isset($_SESSION["user"]))
{
    session_destroy();
    header("location: mainPage");
}

include "connectmysql.php";
$i=0;
$name = $email = $city = $address = $state = $zip = $cardname = $cardnum = $expmonth = $expyear = $cvv = "";
$errorMsg = "";
$success = true;

/*-----------------------------full name---------------------------------*/
if (empty($_POST["fullname"])) 
{     
    $errorMsg .= "Full name is required.<br>";     
    $success = false; 
}
else 
{     
    $fname = sanitize_input($_POST["fullname"]); 
} 


/*--------------------------------credit card ------------------------------------*/
if (empty($_POST["cardnum"])|| !is_numeric($_POST['cardnum'])) 
{
    $errorMsg .= "Please provide proper credit card details.<br>";     
    $success = false; 
}
else 
{   
    $cardnum = sanitize_input($_POST["cardnum"]); 
    $cardtype = array(
        "visa"       => "/^4[0-9]{12}(?:[0-9]{3})?$/",
        "mastercard" => "/^5[1-5][0-9]{14}$/",
        "amex"       => "/^3[47][0-9]{13}$/",
        "discover"   => "/^6(?:011|5[0-9]{2})[0-9]{12}$/",
    );
    if (preg_match($cardtype['visa'],$cardnum))
    {
	$type= "Visa";
        
	
    }
    else if (preg_match($cardtype['mastercard'],$cardnum))
    {
	$type= "Mastercard";
        
    }
    else if (preg_match($cardtype['amex'],$cardnum))
    {
	$type= "Amex";
        
	
    }
    else if (preg_match($cardtype['discover'],$cardnum))
    {
	$type= "Discover";
        
    }
    else
    {
        $errorMsg .= "Invalid Credit Card Number format.<br>";  
        $success = false; 
    }   
}
/*--------------------------------exp month------------------------------------*/
if (empty($_POST["expmonth"]) || !is_numeric($_POST["expmonth"])) 
{
    $errorMsg .= "Incorrect Month Format.<br>";     
    $success = false; 
    if (empty($_POST["expyear"]) && !is_numeric($_POST["expyear"])) 
    {
    $errorMsg .= "Incorrect Year Format.<br>";     
    $success = false; 
    }
}
else 
{     
    $expmonth = sanitize_input($_POST["expmonth"]); 
    $expyear = sanitize_input($_POST["expyear"]);
    $expires = \DateTime::createFromFormat('my',$expmonth.$expyear);
    $now     = new \DateTime();
    if ($expires < $now) 
    {
        $errorMsg .= "This card is expired. <br>";
        $success = false;
    // expired
    }
} 

/*-------------------------------cvv------------------------------------*/
if (empty($_POST["cvv"]) || !is_numeric($_POST["cvv"])) 
{
    $errorMsg .= "Incorrect CVV format.<br>";     
    $success = false; 
}
else 
{     
    $cvv = sanitize_input($_POST["cvv"]);
    $num_length = strlen((string)$cvv);
    if($num_length == 3) {
    // Pass
} else {
        $errorMsg .= "CVV is in wrong format. <br>";
        $success = false;
    // Fail
} 
 
}    

/*------------------------------success-----------------------------------*/
 

$pass =""; 

if ($success) 
{  
   
    $pass= '<section id="payment_success" >';
    $pass.= "<h4>Your payment is successful!</h4>";
    $pass.= "<p>Thank you for purchasing, " . $fname;
    $pass.= "<br>";
    $pass.= $type." ".$cardnum."<br> has be successfully been deducted";
    $pass.= "<br><br>";
    $pass.= '<button type="button" class="btn returnh" ><a href="mainPage"/>Return to Home</a></button></section>';
            
/** Helper function to write the data to the DB*/
global  $email, $errorMsg, $success, $price, $pid, $productName, $quantity, $name, $status, $deliveryAddress, $date, $pickup_delivery;
// Create connection
$status = "processing";

$u_purchased = $_SESSION['user'];
    
if(isset($_SESSION["cart_array"]) && !empty($_POST['zip']) && is_numeric($_POST['zip']))
{   $order_id = rand(10000000,99999999) + time();
    foreach($_SESSION["cart_array"] as $eachitem )
    {

    $i++;
    $productName = $eachitem['productName'];
    $price = $_POST["total"];
    $quantity = $eachitem['quantity'];
    $date = date('Y-m-d');
    $pickup_delivery = $_POST["pickup_delivery"];
    if($pickup_delivery == "Store Pick up")
    {
        $deliveryAddress = $_POST["storeaddress"];
    }
    else{
        $deliveryAddress = $_POST["homeaddress"];
    }

    $sql = "INSERT INTO p5_6.product_purchased (`product_name_purchased`, `product_price_purchased`, `product_quantity_purchased`, `user_purchased`, `delivery_status`, `order_id`, `pickup_delivery`, `delivery_address`, `time_of_purchased`) VALUES ('$productName','$price','$quantity','$u_purchased','$status',$order_id','$pickup_delivery','$deliveryAddress','$date')";

    
    if ($conn->query($sql) == TRUE) {
    } 
    else 
    {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $sql = "SELECT product_quantity FROM p5_6.product_table WHERE product_name='$productName'";
    $result = $conn->query($sql);
    if($result -> num_rows > 0)
    {
        $row = $result -> fetch_assoc();
        $cart_quant = $row["product_quantity"];
        $new_cart_quant = $cart_quant - $quantity;
    }
    $sql = "UPDATE p5_6.product_table SET product_quantity='$new_cart_quant' WHERE product_name='$productName'";
    $result = $conn->query($sql);
    }
        
 }
     unset($_SESSION["cart_array"]);
     unset($row);
     $conn->close();
} 
else 
{       
    $pass= '<section id="payment_fail" class="payment_fail">';
    $pass.= "<h2>Oops!</h2>";
    $pass.= "<h4>The following input errors were detected:</h4>";    
    $pass.= "<p>" . $errorMsg . "</p>"; 
    $pass.= '<section id="payment_button" name="payment_button" >';
    $pass.= '<button type="button" name="return_payment" class="btn return_payment"><a href="payment">Return to payment</a></button>';    
    $pass.= "</section>";
    $pass.= "</section>";  
    

    
} 
 
//Helper function that checks input for malicious or unwanted content.

function sanitize_input($data) 
{   
    $data = trim($data);   
    $data = stripslashes($data);   
    $data = htmlspecialchars($data);
    return $data; 
} 
 
?>
<?php
if($i<=0)
{
    
    $checkoutbtn = '';
}
?>

<!DOCTYPE html>
<head>
        <title>Payment</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="css/main2.css"/>
        <link rel="stylesheet" href="css/modalcss.css"/>
        <link rel="stylesheet" href="css/process-payment.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="js/sideMenu.js"></script>
<?php   include "headerLogin.php";
        echo $pass;
        include "footer.php";
?>
    
</body>
</html>
