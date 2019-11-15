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




/*--------------------------------zip code------------------------------------*/
//if (empty($_POST["zip"])) 
//{
//    $errorMsg .= "Zip code is required.<br>";     
//    $success = false; 
//}
//else 
//{     
//    $zip = sanitize_input($_POST["zip"]); 
//     $zipleng = strlen((string)$zip);
//    if($zipleng == 6) 
//    {
//    // Pass
//    }
//    else {
//        $errorMsg .= "Zip Code is in wrong format. <br>";
//        $success = false;
//    // Fail
//    } 
// 
//} 
/*--------------------------------credit card ------------------------------------*/
if (empty($_POST["cardnum"])) 
{
    $errorMsg .= "Credit Card Number is required.<br>";     
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
if (empty($_POST["expmonth"])) 
{
    $errorMsg .= "Expire Month is required.<br>";     
    $success = false; 
    if (empty($_POST["expyear"])) 
    {
    $errorMsg .= "Expire year is required.<br>";     
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
if (empty($_POST["cvv"])) 
{
    $errorMsg .= "cvv is required.<br>";     
    $success = false; 
}
else 
{     
    $cvv = sanitize_input($_POST["cvv"]);
    $num_length = strlen((string)$num);
    if($num_length == 3) {
    // Pass
} else {
        $errorMsg .= "CVV is in wrong format. <br>";
        $success = false;
    // Fail
} 
 
}    

/*------------------------------success-----------------------------------*/
 
include "headerLogin.php";

if ($success) 
{     
    echo '<section id="payment_success" >';
    echo "<h4>Your payment is successful!</h4>";
    echo "<p>Thank you for purchasing, " . $fname;
    echo "<br>";
    echo $type." ".$cardnum."<P> has be successfully been deducted";
    echo "<br><br>";
    echo '<button type="button" class="btn btn-light" ><a href="mainPage"/>Return to Home</a></button>';
            
/** Helper function to write the data to the DB*/
global  $email, $errorMsg, $success, $price, $pid, $productName, $quantity, $name, $status;
// Create connection
$status = "processing";

$u_purchased = $_SESSION['user'];
if(isset($_SESSION["cart_array"]))
{        
    foreach($_SESSION["cart_array"] as $eachitem )
    {

     $i++;
    $pid = $eachitem['product_id'] + time();
    $productName = $eachitem['productName'];
    $price = $_POST["total"];
    $quantity = $eachitem['quantity'];
    $zip = $_POST['zip'];
        
    $sql = "INSERT INTO product_purchased (product_id_purchased, product_name_purchased, product_price_purchased, product_quantity_purchased, user_purchased, delivery_status, zip)";
    $sql .= " VALUES('$pid', '$productName', '$price', '$quantity', '$u_purchased','$status','$zip')";
    if ($conn->query($sql) == TRUE) {
    echo "";
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
    echo '<section id="payment_fail" class="payment_fail">';
    echo "<h2>Oops!</h2>";
    echo "<h4>The following input errors were detected:</h4>";    
    echo "<p>" . $errorMsg . "</p>"; 
    echo '<section id="payment_button" name="payment_button" >';
    echo '<button type="button" name="return_payment" class="btn return_payment"><a href="payment">Return to payment</a></button>';    
    echo "</section>";
    echo "</section>";  
    

    
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
        <title>Welcome To Guilty Pleasures!</title>
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
</head>
<body>
    
</body>
</html>
