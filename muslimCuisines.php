<?php
$dynamicTable = "";
$i = 0;

$sql = "SELECT * FROM product_table WHERE ";
$sql .= "product_type='muslim'";
// Execute the query
$result = $conn->query($sql);
if($result->num_rows > 0)
{
    while($row = $result -> fetch_assoc())
    {
        $id = $row["product_id"];
        $productName = $row["product_name"];
        $productDesc = $row["product_description"];
        $price = $row["product_price"];
        
        
        if($i % 3 == 0){
            $dynamicTable .= '<div class="main-menu">';
            $dynamicTable .= '<div class="col-md-4 menu-bottom1">';
        }
        else
        {
            $dynamicTable .= '<div class="col-md-4 menu-bottom1">';
        }

        $dynamicTable .= '<img src="images/' . $id .'.JPG" alt="' . $productName . '" class="img-responsive">';
        $dynamicTable .= '<h4>' . $productName . '</h4>';
        $dynamicTable .= '<p>$' . $price . '</p>';
        $dynamicTable .= '<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal' . $id . '">View Product Details</button>';
        $dynamicTable .= '<div class="modal fade" id="myModal' . $id . '" role="dialog">';
        $dynamicTable .= '  <div class="modal-dialog">';
        $dynamicTable .= '      <div class="modal-content">';
        $dynamicTable .= '          <div class="modal-header">';
        $dynamicTable .= '              <h4 class="modal-title">Shopping Cart</h4>';
        $dynamicTable .= '              <button type="button" class="close" data-dismiss="modal">&times;</button>';
        $dynamicTable .= '          </div>';
        $dynamicTable .= '          <div class="modal-body">';
        $dynamicTable .= '              <h2>' . $productName. '</h2>';
        $dynamicTable .= '              <section class="containbody">';
        $dynamicTable .= '                  <img src="images/' . $id . '.JPG" alt="'. $productName .'" >';
        $dynamicTable .= '                  <p>'. $productDesc .'</p>';
        $dynamicTable .= '              </section>';
        if(isset($_SESSION["user"]))
        {
            $dynamicTable .= '                  <form id = "addToCart" name = "addToCart" method="post" action="cuisinesKQ">';
            $dynamicTable .= '                    <input type="number" name="quantity" id="quantity" min="1" max="5" value="1"/>';  
        }
        $dynamicTable .= '          </div>';
        $dynamicTable .= '          <div class="modal-footer">';
        if(isset($_SESSION["user"]))
        {
        $dynamicTable .= '                    <input type="hidden" name="pid" id="pid" value="' . $id . '"/>';
        $dynamicTable .= '                    <input type="hidden" name="pname" id="pname" value="' . $productName . '"/>'; 
        $dynamicTable .= '                    <input type="hidden" name="pdesc" id="pdesc" value="' . $productDesc . '"/>';
        $dynamicTable .= '                    <input type="hidden" name="price" id="price" value="' . $price . '"/>'; 
        $dynamicTable .= '                    <input type="submit" class="btn btn-info btn-default" name="button" value="Add to Shopping Cart"/>';
        $dynamicTable .= '                  </form>';       
        }
        $dynamicTable .= '              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
        $dynamicTable .= '          </div>';
        $dynamicTable .= '      </div>';
        $dynamicTable .= '  </div>';
        $dynamicTable .= '</div>';
        $dynamicTable .= '<div class="clearfix"></div></div>';

        $i++;   

        if($i %3 == 0)
        {
            $dynamicTable .= '<div class="clearfix"></div></div>';
        }
    }
    $dynamicTable .= '<div class="clearfix"></div></div>';
}
else
{
    echo"Item does not exist.";
}

?>




<html>
    <section id="IMfood" style="margin-bottom: 25px;">
        <div class="container">
            <!-- Column for dynamic bootstrap properties-->
            <div class="menu-top col-sm-12">
                <h2>Halal<span class="fas fa-bacon"></span></h2>
                <h6>Tantalize your taste buds with our delectable choices of Halal dishes!!
                </h6>
                <div class="clearfix"></div>
            </div>
            <?php
            echo $dynamicTable;
            ?>
        </div>
    </section>
</html>


