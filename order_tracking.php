<!DOCTYPE html>
<?php session_start();
if(!isset($_SESSION['user']))
{
    session_destroy();
    header("location:mainPage");
}
else
{
    if($_SESSION["user"] == "kq")
    {
        header("location:mainPage");
    }
}
?>
<?php
    include "connectmysql.php";
    $index = 0;
    $user_id = $_SESSION['user'];
    $sql = "SELECT DISTINCT order_id FROM p5_6.product_purchased WHERE user_purchased='" . $user_id . "';"; //REPLACE user_id WITH LOGGED IN USER
    $result = $conn->query($sql);
    if (mysqli_num_rows($result) > 0)
    {
        $table = "<h1>Order Tracking</h1>";
        $table .= "<table class='table table-bordered'><thead><tr><th>Order ID</th><th>Product</th><th>Quantity</th><th>Delivered to</th><th>Total Price</th><th>Status</th><th>Pickup/Delivery</th><th>Time Purchased</th></thead><tbody>";

        while ($row = $result->fetch_assoc()) {
            $sql_order = "SELECT * FROM p5_6.product_purchased where order_id=" . $row["order_id"] . ";";
            $result_order = $conn->query($sql_order);
            $index = 0;
            while ($row_order = $result_order->fetch_assoc())
            {
                if (mysqli_num_rows($result_order) == 1)
                {
                   $table .= "<tr><td>" . $row_order['order_id'] . "</td><td>" . $row_order["product_name_purchased"] . "</td><td>" . $row_order['product_quantity_purchased'] . "</td><td>" . $row_order['delivery_address'] . "</td><td>" . $row_order['product_price_purchased'] . "</td><td>" . $row_order['delivery_status'] . "</td><td>" . $row_order["pickup_delivery"] . "</td><td>" . $row_order["time_of_purchased"] . "</td></tr>";
                }
                else //for orders with multiple items ordered
                {
                    if ($index == 0)
                    {
                        $table .= "<tr><td rowspan=" . mysqli_num_rows($result_order) .">" . $row_order['order_id'] . "</td><td>" . $row_order["product_name_purchased"] . "</td><td>" . $row_order['product_quantity_purchased'] . "</td><td rowspan=" . mysqli_num_rows($result_order) .">" . $row_order['delivery_address'] . "</td><td rowspan=" . mysqli_num_rows($result_order) . ">$" . $row_order['product_price_purchased'] . "</td><td rowspan=" . mysqli_num_rows($result_order) . ">" . $row_order['delivery_status'] . "</td><td rowspan=" . mysqli_num_rows($result_order) . ">" . $row_order['pickup_delivery'] . "</td><td rowspan=" . mysqli_num_rows($result_order) . ">" . $row_order['time_of_purchased'] . "</td></tr>"; 
                    }
                    else
                    {
                        $table .= "<tr><td>" . $row_order["product_name_purchased"] . "</td><td>" . $row_order['product_quantity_purchased'] . "</td></tr>";
                    }
                }
                $index += 1;
            }
           }
        $table .= "</table><br>";
    }
    else
    {
        $table = "<h1>No orders yet! Please click <a href='cuisinesKQ.php'>here</a> to start ordering!</h1>";
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
        
        <!--TAGS IN HEADER LOGIN -->
        <?php include "headerLogin.php" ?>
        <section class="container-fluid" id="orders">
        <?php echo $table;?>
        </section>
        <?php include "footer.php" ?>
    </body>
    