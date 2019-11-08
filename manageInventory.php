<?php
#check for admin session cookie
#session_start();
#
#if(!isset($_SESSION["admin"]))
#{
#    header("location: mainPage.php?logcount");
#}
?>

<?php
$productTable = "";
define("DBHOST", "localhost");
define("DBNAME", "ict_1004");
define("DBUSER", "root");
define("DBPASS", "");

$conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

if ($conn->connect_error)
{
    $productTable = $conn->connect_error;
}
else
{
    $sql = "SELECT * FROM product_table";
    $result = $conn->query($sql);
    if($result->num_rows > 0)
    {
        $productTable .= '<table>';
        $productTable .= '  <tr id="tablehead">';
        $productTable .= '  <th>Identifier</th> ';
        $productTable .= '  <th>Product Name</th>';
        $productTable .= '  <th>Quantity</th> ';
        $productTable .= '  <th>Actions</th> ';
        $productTable .= '</tr>';
        $i =1;
                    
        while($row = $result -> fetch_assoc())
        {
            $productName = $row["product_name"];
            $quantity = $row["product_quantity"];
            
            $productTable .= "<tr>";
            $productTable .= '  <th>'. $i .'</th>';
            $productTable .= '  <th>'. $productName .'</th>';
            $productTable .= '  <th>'. $quantity . '</th>';
            $productTable .= '  <th><a href="#">Edit</a></th>';
            $productTable .= "</tr>";  
            $i++;
        }
         $productTable .= '</table>';
    }
}
$conn->close();
?>

<?php

if(isset($_GET['add']))
{
    if(isset($_POST['addpname'])&&isset($_POST['addprice'])&&isset($_POST['addptype'])&&isset($_POST['addquantity'])&&isset($_POST['addpdesc']))
    {
        $addpname = $_POST['addpname'];
        $addprice = $_POST['addprice'];
        $addptype = $_POST['addptype'];
        $addquantity = $_POST['addquantity'];
        $addpdesc = $_POST['addpdesc'];

        define("DBHOST2", "localhost");
        define("DBNAME2", "ict_1004");
        define("DBUSER2", "root");
        define("DBPASS2", "");

        $conn = new mysqli(DBHOST2, DBUSER2, DBPASS2, DBNAME2);

        if ($conn->connect_error)
        {
            $productTable = $conn->connect_error;
        }
        else
        {
            $sql = "INSERT INTO product_table (product_name, product_description, product_price, product_quantity, product_type)"
                    . " VALUES ('$addpname', '$addpdesc',' $addprice', '$addquantity', '$addptype')";
            $result = $conn->query($sql);
            if($result == TRUE)
            {
                header("location:manageInventory.php");
            }
            else
            {
                echo '<script type="text/javascript">';
                echo '  alert("Error adding record or Required fields are empty.")';
                echo '</script>';
            }
        }
        $conn->close();
    }
}

?>

<html>
    <head>
        <title>Manage Inventory</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="css/main2.css"/>
        <link rel="stylesheet" href="css/modalcss.css"/>
        <link rel="stylesheet" href="css/adminPage.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
        <script src="js/sideMenu.js"></script>

    </head>
    
    <body id="inventbody">
        <?php include_once 'admin_header.php';
        include_once "header.php";?>
        
        <section class="container" id="manageInventory">
            <div class="jumbotron">
              <h1>Manage Inventory</h1>      
            </div>
        </section>
        <section id="inventtable">
            <h1>Inventories</h1>
            <?php echo $productTable;?>
        </section>
        <section id="addProducts">
            <h2 style="text-align: center;">Add New Products</h2>
            <form method="post" action = "manageInventory.php?add=1">
                <label for="productName">Product Name:</label>
                <input class="form-control" required="required" type="text" name="addpname" placeholder="Product Name...">
                <label for="price">Price:</label>
                <input class="form-control" required="required" type="text" name="addprice" placeholder="Price...">
                <label for="ptype">Product Type:</label>
                <select name="addptype" required="required">
                    <option value="chinese">Chinese</option>
                    <option value="muslim">Muslim</option>
                </select>
                <br>
                <label for="quantity">Quantity:</label>
                <input class="form-control" required="required" type="number" name="addquantity" placeholder="Select Quantity...">
                <textarea rows="5" cols="107" required="required" name="addpdesc" placeholder="Product Descriptions..."></textarea>
                <p><input class="btn btn-lg btn-primary" type="submit"></p> 
            </form>
        </section>
        
        <?php include "footer.php";?>
    </body>
    
    
    
</html>

