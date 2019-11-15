
<?php
#check for admin session cookie
session_start();
#
if(!isset($_SESSION['user']) || $_SESSION["user"]!='kq')
{
    header("location: mainPage");
}

?>



<?php
include "connectmysql.php";

$productTable = "";

$sql = "SELECT * FROM product_table";
$result = $conn->query($sql);
if($result->num_rows > 0)
{
    $productTable .= '<table>';
    $productTable .= '  <tr id="tablehead">';
    $productTable .= '  <th>Identifier</th> ';
    $productTable .= '  <th>Image path</th> ';
    $productTable .= '  <th>Product Name</th>';
    $productTable .= '  <th>Quantity</th> ';
    $productTable .= '  <th>Actions</th> ';
    $productTable .= '</tr>';
    $i =1;

    while($row = $result -> fetch_assoc())
    {
        $id = $row["product_id"];
        $productName = $row["product_name"];
        $quantity = $row["product_quantity"];

        $productTable .= "<tr>";
        $productTable .= '  <td>'. $i .'</td>';
        $productTable .= '  <th>images/' . $id .'.JPG</td>';
        $productTable .= '  <td>'. $productName .'</td>';
        $productTable .= '  <td>'. $quantity . '</td>';
        $productTable .= '  <td><a href="processes?remove='. $productName .'">Remove</a></td>';
        $productTable .= "</tr>";  
        $i++;
    }
     $productTable .= '</table>';
}

unset($row);
$result->free_result();
$conn->close();
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
        <?php include 'headerLogin.php';?>

        
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
            <form method="post" action = "processes?add=1">
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
