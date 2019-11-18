<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include "connectmysql.php";

if(isset($_GET['add']) && $_GET['add']==1)
{
    if(isset($_POST['addpname'])&&isset($_POST['addprice'])&&isset($_POST['addptype'])&&isset($_POST['addquantity'])&&isset($_POST['addpdesc'])&& is_numeric($_POST['addprice']) && is_numeric($_POST['addquantity']))
    {
        $addpname = sanitize_input($_POST['addpname']);
        $addprice = sanitize_input($_POST['addprice']);
        $addptype = sanitize_input($_POST['addptype']);
        $addquantity = sanitize_input($_POST['addquantity']);
        $addpdesc = sanitize_input($_POST['addpdesc']);
        
        $sql = "INSERT INTO product_table (product_name, product_description, product_price, product_quantity, product_type)"
                . " VALUES ('$addpname', '$addpdesc',' $addprice', '$addquantity', '$addptype')";
        $result = $conn->query($sql);
        if($result != TRUE)
        {
            header("location:manageInventory");
        }
        else
        {
            echo '<script type="text/javascript">';
            echo '  alert("Error adding record or Required fields are empty.")';
            echo '</script>';
            header("location:manageInventory");
        }
    }
    else
    {
        header("location:manageInventory");
    }
}

$sql_order = 'SELECT * FROM p5_6.product_table';
$result_order = $conn -> query($sql_order);

if($result_order -> num_rows > 0)
{
    $identifier = $_GET['remove'];
    while($row_order = $result_order -> fetch_assoc())
    {
        if(isset($_GET['remove']) && !empty($_GET['remove']) && $row_order["product_name"] == $identifier)
        {
            $sql = "DELETE FROM product_table WHERE product_name='$identifier'";
            $result = $conn->query($sql);
            header("location:manageInventory"); 
        }
    }
}


if($_GET['reset']==1)
{
    session_start();
    unset($_SESSION["user"]);
    if(isset($_SESSION['cart_array']))
    {
        unset($_SESSION['cart_array']);
    }
    session_destroy();
    header("location:mainPage");
}

if(isset($_POST['updateStatus']))
{
    $elementId = sanitize_input($_POST['elementId']);
    $elementValue = sanitize_input($_POST['elementValue']);
    $sql = "UPDATE p5_6.product_purchased SET delivery_status='$elementValue' WHERE order_id ='$elementId' ";
    // Execute the query
    $result = $conn->query($sql);
    die;
}





function sanitize_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>


