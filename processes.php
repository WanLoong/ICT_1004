<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include "connectmysql.php";

if(isset($_GET['add']))
{
    if(isset($_POST['addpname'])&&isset($_POST['addprice'])&&isset($_POST['addptype'])&&isset($_POST['addquantity'])&&isset($_POST['addpdesc'])&& is_numeric($_POST['addprice']))
    {
        $addpname = sanitize_input($_POST['addpname']);
        $addprice = sanitize_input($_POST['addprice']);
        $addptype = sanitize_input($_POST['addptype']);
        $addquantity = sanitize_input($_POST['addquantity']);
        $addpdesc = sanitize_input($_POST['addpdesc']);

        
        $sql = "INSERT INTO product_table (product_name, product_description, product_price, product_quantity, product_type)"
                . " VALUES ('$addpname', '$addpdesc',' $addprice', '$addquantity', '$addptype')";
        $result = $conn->query($sql);
        if($result == TRUE)
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

if(isset($_GET['remove']))
{
    $identifier = $_GET['remove'];
    $sql = "DELETE FROM product_table WHERE product_name='$identifier'";
    $result = $conn->query($sql);
    header("location:manageInventory"); 
}


if(isset($_GET['reset']))
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





function sanitize_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>


