<?php

session_start();
if(!isset($_SESSION['user']) || $_SESSION['user'] != "kq")
{
    if($_SESSION['user'] != kq)
    {
        header("location: mainPage");
    }
}

include "connectmysql.php";
?>

<?php
$sql = "SELECT * FROM p5_6.product_purchased"; //REPLACE user_id WITH LOGGED IN USER
$result = $conn->query($sql);
$table = "<table class='table table-bordered'><thead><tr><th>Order ID</th><th>User Purchased</th><th>Product</th><th>Quantity</th><th>Delivered To</th><th>Total Price</th><th>Status</th></thead><tbody>";
$idarray = array();
if($result->num_rows > 0)
{
    while ($row = $result->fetch_assoc())
    {
        $table .= "<tr><td>" . $row['product_id_purchased'] . "</td>"
                . "<td>" . $row['user_purchased'] . "</td>"
                . "<td>" . $row['product_name_purchased'] . "</td>"
                . "<td>" . $row['product_quantity_purchased'] . "</td>"
                . "<td>" . $row['zip'] . "</td>"
                . "<td>" . $row['product_price_purchased'] . "</td>"
                . "<td>"
                . "<select id='".$row['product_id_purchased']."' onchange='ajaxfunction(this)'>";
        if($row['delivery_status'] == "processing")
        {
            $table .= "<option value='processing'>Processing</option>"
                    . "<option value='delivering'>Delivering</option>"
                    . "<option value='Delivered'>Delivered</option>";
        }
        else if ($row['delivery_status'] == "delivering")
        {
            $table .= "<option value='delivering'>Delivering</option>"
                    . "<option value='processing'>Processing</option>"
                    . "<option value='Delivered'>Delivered</option>";
        }
        else{
            $table .= "<option value='Delivered'>Delivered</option>"
                    . "<option value='processing'>Processing</option>"
                    . "<option value='delivering'>Delivering</option>";                    
            
        }
            $table .= "</select>"
                    . "</td>";
     }
     $table .= "</tbody></table>";
}
else
{
    $table = "<h1 style='margin-left: 50px;'> No Entries </h1>";
}
$conn->close();
?>
<html>
     <head>
        <title>Order Tracking</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" initial-scale=1>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="css/main2.css"/>
        <!--<link rel="stylesheet" href="css/mainPage.css"/>-->
        <link rel="stylesheet" href="css/modalcss.css"/>
        <link rel="stylesheet" href="css/orderTracking.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
        <script src="js/sideMenu.js"></script>
        <script src="js/modal.js"></script>
    </head>
    
    <body id="orderbody">
        <?php include "headerLogin.php" ?>
        <section class="container-fluid" id="orders">
            <h1>Order Tracking</h1>
            <?php
                echo $table;
            ?>            
        </section>
        <?php include "footer.php" ?>
    </body>

</html>



