<?php
if(!isset($_SESSION['user_email'])){
    header('location: login.php?not_admin=You are not Admin!');
}
if(isset($_GET['edit_doctor'])){
    $get_id = $_GET['edit_doctor'];
    $get_doc = "select * from doctor where doc_id='$get_id'";
    $run_doc = mysqli_query($con, $get_doc);
    $row_doc = mysqli_fetch_array($run_doc);
    $doc_id = $row_doc['doc_id'];
    $doc_name = $row_doc['doc_name'];
    $doc_image = $row_doc['doc_image'];
    $doc_desc = $row_doc['doc_desc'];
}
if(isset($_POST['update_doc'])){
    //getting text data from the fields
    $doc_name = $_POST['doc_name'];
    $doc_desc = $_POST['doc_desc'];
    //getting image from the field
    $doc_image = $_FILES['doc_image']['name'];
    $doc_image_tmp = $_FILES['doc_image']['tmp_name'];

    move_uploaded_file($doc_image_tmp,"images/$doc_image");

    $update_doctor = "update doctor set doc_name = '$doc_name' ,
                                        doc_desc = '$doc_desc',
                                        doc_image = '$doc_image',  
                                        where doc_id='$doc_id'";

    $update_doc = mysqli_query($con, $update_doctor);
    if($update_doc){
        header("location: index.php?view_doctor");
    }
}
?>
<div class="row">
    <div class="offset-md-2 col-md-8">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <h2 class="offset-lg-3 offset-md-2 offset-1 "> Edit & Update Product </h2>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="doc_name">Doctor Name</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="doc_name" name="doc_name" placeholder="Title"
                           value="<?php echo $doc_name;?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="doc_image">Doctor Image</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <img class="img-thumbnail" src='images/<?php echo $doc_image;?>' width='80' height='80'>
                    <input class="form-control-file" type="file" id="doc_image" name="doc_image" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="doc_desc">Doctor Description</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <textarea class="form-control"  name="doc_desc" id="doc_desc" rows="4" placeholder="Doctor Description">
                        <?php echo $doc_desc;?>
                    </textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-3 col-12 col-sm-6">
                    <input class="btn btn-block btn-primary btn-lg" type="submit" id="update_doc" name="update_doc"
                           value="Update Doctor Now">
                </div>
            </div>
        </form>
    </div>
</div>
