<?php
require_once "db_connection.php";
function getPro(){
    global $con;
    $getProQuery = '';
    if(!isset($_GET['doc']) && !isset($_GET['search'])){
        $getProQuery = "select * from doctor order by RAND();";
    }
    else if(isset($_GET['search'])){
        $user_query = $_GET['search'];
        $getProQuery = "select * from doctor where doc_name like '%$user_query%'";
    }
    $getProResult = mysqli_query($con,$getProQuery);
    $count_pro = mysqli_num_rows($getProResult);
    if($count_pro==0){
        echo "<h4 class='alert-warning align-center my-2 p-2'> No Doctor found in selected criteria </h4>";
    }
    while($row = mysqli_fetch_assoc($getProResult)){
        $doc_id = $row['doc_id'];
        $doc_name = $row['doc-name'];
        $doc_desc = $row['doc_desc'];
        $doc_img = $row['doc_img'];
        echo "
                <div class='col-sm-6 col-md-4 col-lg-3 text-center product-summary'>
                    <h5 class='text-capitalize'>$doc_name</h5>
                    <img src='admin/product_images/$doc_img'>
                    <p> <b> $doc_desc </b> </p>
                    <a href='detail.php' class='btn btn-info btn-sm'>Details</a>
                </div>
        ";
    }
}
