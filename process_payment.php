<?php
session_start();
    include "connectmysql.php";
   
     $name = $email = $pwd = $city = $address = $state = $zip = $cname = $cnum = $expmonth = $expyear = $cvv = "";
        $errorMsg = "";
        $success = true;
        
        
        

/*-----------------------------first name---------------------------------*/
if (empty($_POST["fullname"])) 
{     
    $errorMsg .= "Full name is required.<br>";     
    $success = false; 
}
else 
{     
    $fname = sanitize_input($_POST["fullname"]); 
} 



/*--------------------------------email------------------------------------*/
//if (empty($_POST["email"])) 
//{
//    $errorMsg .= "Email is required.<br>";     
//    $success = false; 
//}
//else 
//{     
//    $email = sanitize_input($_POST["email"]); 
// 
//// Additional check to make sure e-mail address is well-formed.     
//if (!filter_var($email, FILTER_VALIDATE_EMAIL))     
//{         
//    $errorMsg .= "Invalid email format.<br>";         
//    $success = false;     
//} 
//} 

/*----------------------------------pwd------------------------------------*/
//if (empty($_POST["password"])) 
//{
//    $errorMsg .= "Password is required.<br>";     
//    $success = false; 
//}
//else
//{
//    //Add regex check
//    if (strlen($_POST["password"]) <= 8) {
//        $errorMsg = "Your Password Must Contain At Least 8 Characters!<br>";
//        $success = false; 
//    }
//    elseif(!preg_match("#[0-9]+#", $_POST["password"])) 
//    {
//        $errorMsg = "Your Password Must Contain At Least 1 Number!<br>";
//        $success = false; 
//    }
//    elseif(!preg_match("#[A-Z]+#", $_POST["password"])) 
//    {
//        $errorMsg = "Your Password Must Contain At Least 1 Capital Letter!<br>";
//        $success = false; 
//    }
//    elseif (!preg_match("#[a-z]+#", $_POST["password"]))
//    {
//        $errorMsg = "Your Password Must Contain At Least 1 Lowercase Letter!<br>";
//        $success = false; 
//    }
//    else 
//    {
//        $pwd = sanitize_input($_POST["password"]);
//    }
//}

    
/*-----------------------------check deliver address---------------------------------*/
//if(!isset($_POST["sameadr"]) && empty ($_POST["sameadr"]))
//{
//    $errorMsg .= "Please agree the terms and condition!<br>";     
//    $success = false;
//}

/*------------------------------success-----------------------------------*/
if ($success) 
{     
    echo "<h4>Your payment is successful!</h4>";
    echo "<p>Thank you for purchasing, " . $fname;
    echo "<br><br>";
    echo '<button type="button" class="btn btn-light"><a href="mainPage"/>Return to Home</a></button>';
    
    
        
} 
else 
{    
    
    echo "<link rel='stylesheet' type='text/css' href='css/bootstrap.min.css' />";
    echo "<link rel='stylesheet' type='text/css' href='css/mycss.css' />";
    echo '<section id="register_fail">';
    echo "<h2>Oops!</h2>";
    echo "<h4>The following input errors were detected:</h4>";    
    echo "<p>" . $errorMsg . "</p>"; 
   
    echo '<section id="payment_button">';
    echo '<button type="button" class="btn btn-light"><a href="payment"/>Return to payment</a></button>';    
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
        
/** Helper function to write the data to the DB*/
global  $email, $errorMsg, $success, $price, $pid, $productName, $quantity, $name;
// Create connection
$i=0;
$conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
//Check connection
if ($conn->connect_error)
{
    $errorMsg = "Connection failed: " . 
    $conn->connect_error;
    $success = false;

}
else
{
    if(isset($_SESSION["cart_array"]))
    {        
        foreach($_SESSION["cart_array"] as $eachitem)
        {
            print_r($eachitem);
            $i++;
        $pid = $eachitem['product_id'];
        $productName = $eachitem['productName'];
        $price = $eachitem['price'];
        $quantity = $eachitem['quantity'];
        $sql = "INSERT INTO product_purchased (product_id_purchased, product_name_purchased, product_price_purchased, product_quantity_purchased, user_purchased)";
        $sql .= " VALUES('$pid', '$productName', '$price', '$quantity', '$name')";
        }
     }
     if ($conn->query($sql)){
            $errorMsg = "Database error: " . $conn->error;
            $success = false;
    } 
}
$conn->close();  
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
    $productDisplay .= '<h1 style="margin-left:50px;">Your Shopping Cart is Empty.</h1>';
    $checkoutbtn = '';
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
    
<?php 
        include "headerLogin.php";
?>   
</body>

</html>
