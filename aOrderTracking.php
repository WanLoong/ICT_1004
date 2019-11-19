<?php

session_start();
if(!isset($_SESSION['user']) || $_SESSION['user'] != "administrator")
{
        header("location: mainPage");
}

include "connectmysql.php";
?>

<?php
$sql = "SELECT DISTINCT order_id FROM p5_6.product_purchased;"; //REPLACE user_id WITH LOGGED IN USER
$result = $conn->query($sql);
if($result->num_rows > 0)
{
    $table = "<h1>Order Tracking</h1>";
    $table .= "<table class='table table-bordered'><thead><tr><th>Order ID</th><th>User Purchased</th><th>Product</th><th>Quantity</th><th>Delivered To</th><th>Total Price</th><th>Pickup/Delivery</th><th>Status</th></thead><tbody>";
    while ($row = $result->fetch_assoc())
    {
        $sql_order = "SELECT * FROM p5_6.product_purchased where order_id=" . $row["order_id"] . ";";
        $result_order = $conn->query($sql_order);
        $index = 0;
        while($row_order = $result_order -> fetch_assoc())
        {
            if($result_order->num_rows == 1)
            {
                 $table .= "<tr><td>" . $row_order['order_id'] . "</td>"
                . "<td>" . $row_order['user_purchased'] . "</td>"
                . "<td>" . $row_order['product_name_purchased'] . "</td>"
                . "<td>" . $row_order['product_quantity_purchased'] . "</td>"
                . "<td>" . $row_order['delivery_address'] . "</td>"
                . "<td>$" . $row_order['product_price_purchased'] . "</td>"
                . "<td>" . $row_order['pickup_delivery'] . "</td>"                       
                . "<td>"
                . "<select id='".$row_order['order_id']."' onchange='ajaxfunction(this)'>";
                if($row_order['delivery_status'] == "processing")
                {
                    $table .= "<option value='processing'>Processing</option>"
                            . "<option value='delivering'>Delivering</option>"
                            . "<option value='Delivered'>Delivered</option>";
                }
                else if ($row_order['delivery_status'] == "delivering")
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
                        . "</td></tr>";
            }
            else
            {
                if ($index == 0)
                {
                    $table .= "<tr><td rowspan=" . mysqli_num_rows($result_order) .">" . $row_order['order_id'] . "</td>"
                            . "<td rowspan=" . mysqli_num_rows($result_order) .">" . $row_order["user_purchased"] . "</td>"
                            . "<td>" . $row_order['product_name_purchased'] . "</td>"
                            . "<td>" . $row_order['product_quantity_purchased'] . "</td>"
                            . "<td rowspan=" . mysqli_num_rows($result_order) . ">" . $row_order['delivery_address'] . "</td>"
                            . "<td rowspan=" . mysqli_num_rows($result_order) . ">$" . $row_order['product_price_purchased'] ."</td>"
                            . "<td rowspan=" . mysqli_num_rows($result_order) . ">" . $row_order['pickup_delivery'] ."</td>"
                            . "<td rowspan=" . mysqli_num_rows($result_order) . ">"
                            . "<select id='".$row_order['order_id']."' onchange='ajaxfunction(this)'>";
                            if($row_order['delivery_status'] == "processing")
                            {
                                $table .= "<option value='processing'>Processing</option>"
                                . "<option value='delivering'>Delivering</option>"
                                . "<option value='Delivered'>Delivered</option>";
                            }
                            else if ($row_order['delivery_status'] == "delivering")
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
                            . "</td></tr>";
                }
                else
                {
                    $table .= "<tr><td>" . $row_order["product_name_purchased"] . "</td><td>" . $row_order['product_quantity_purchased'] . "</td></tr>";
                }
                $index++;
            }
        }
    }
    $table .= "</tbody></table>";
}
else
{
    $table = "<h1 id='aordertracking'> No Entries </h1>";
}
$conn->close();
?>
<html>
     <head>
        <title>Admin</title>
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

        <?php include "headerLogin.php" ?>
        <section class="container-fluid" id="orders">
            <?php
                echo $table;
            ?>            
        </section>
        <?php include "footer.php" ?>
    </body>

</html>



