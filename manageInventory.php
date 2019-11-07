

<?php
#check for admin session cookie
#session_start();
#
#if(!isset($_SESSION["admin"]))
#{
#    header("location: mainPage.php?logcount");
#}
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
    
    <body>
        <?php include_once 'admin_header.php';
        include_once "header.php";?>
        
        <section class="container" id="manageInventory">
            <div class="jumbotron">
              <h1>Manage Inventory</h1>      
            </div>  
       </section>
        
        
        <?php include "footer.php";?>
    </body>
    
    
    
</html>

