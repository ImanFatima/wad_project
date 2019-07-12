<?php
if(!isset($_SESSION['user_email'])){
    header('location: login.php?not_admin=You are not Admin!');
}
if(isset($_GET['del_doctor'])){
    $del_id = $_GET['del_doctor'];
    $del_doctor = "delete from doctor where doc_id='$del_id'";
    $run_del = mysqli_query($con,$del_doctor);
    if($run_del){
        header('location: index.php?view_doctor');
    }
}