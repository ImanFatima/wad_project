<?php
if(!isset($_SESSION['user_email'])){
    header('location: login.php?not_admin=You are not Admin!');
}

if (isset($_POST['add_doc'])) {
    //getting text data from the fields
    $doc_name = test_input($_POST['doc_name']);
    $doc_desc = test_input($_POST['doc_desc']);
    $doc_image_name = $_FILES['doc_image']['name'];
    $doc_image_tmp = $_FILES['doc_image']['tmp_name'];
    $doc_image_size = $_FILES['doc_image']['size'];

    if (!preg_match("/[a-zA-Z0-9]+/", $doc_name) || strlen($doc_name) < 2) {
        $response = array(
            "type" => "warning",
            "message" => "Enter Valid Doctor Name."
        );
    } else if (file_exists($doc_image_tmp)) {

        $image_info = getimagesize($doc_image_tmp);
        $width = $image_info[0];
        $height = $image_info[1];
        $target_directory = "images/";
        $allowed_image_extension = array("png", "jpg", "jpeg");

        // Get image file extension
        $image_extension = pathinfo($doc_image_name, PATHINFO_EXTENSION);

        // Validate file input to check if is not empty
        // Validate file input to check if is with valid extension
        if (!in_array($image_extension, $allowed_image_extension)) {
            $response = array(
                "type" => "warning",
                "message" => "Upload valid images. Only PNG and JPEG are allowed."
            );
            //echo $result;
        }    // Validate image file size
        else if ($doc_image_size > 2000000) {
            $response = array(
                "type" => "warning",
                "message" => "Image size exceeds 2MB"
            );
        }    // Validate image file dimension
        else if ($width > "1000" || $height > "800") {
            $response = array(
                "type" => "warning",
                "message" => "Image dimension should be within 1000X800"
            );
        } else {
            $updated_img_name = "user_" . time() . "_" . $doc_image_name;
            $target = $target_directory . $updated_img_name;
            if (move_uploaded_file($doc_image_tmp, $target)) {

                $add_doctor = "insert into doctor (doc_name,doc_desc,doc_image) 
                  VALUES ('$doc_name','$doc_desc','$updated_img_name');";
                $add_doc = mysqli_query($con, $add_doctor);
                if ($add_doc) {
                    //header("location: ".$_SERVER['PHP_SELF']);
                    $response = array(
                        "type" => "success",
                        "message" => "Doctor uploaded successfully."
                    );
                }


            } else {
                $response = array(
                    "type" => "warning",
                    "message" => "Problem in uploading image files."
                );
            }
        }
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Add New </span>
    Doctor </h1>
<?php if (!empty($response)) { ?>
    <div class="alert alert-<?php echo $response["type"]; ?>">
        <?php echo $response["message"]; ?>
    </div>
<?php } ?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
            <label for="doc_name" class="float-md-right"> <span class="d-sm-none d-md-inline"> Doctor </span>
                Title:</label>
        </div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
            <div class="input-group">
                <div class="input-group-prepend">

                </div>
                <input type="text" class="form-control" id="doc_name" name="doc_name"
                       placeholder="Enter Doctor Name"
                    <?php
                    if (@$response["type"] == "warning") {
                        echo "value='$doc_name'";
                    }
                    ?>
                >
            </div>
        </div>

    </div>
    <div class="row my-3">
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
            <label for="doc_img" class="float-md-right"><span class="d-sm-none d-md-inline"> Doctor </span>
                Image:</label>
        </div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-3 mt-lg-0">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="far fa-image"></i></div>
                </div>
                <input class="form-control" type="file" id="doc_image" name="doc_image">
            </div>
        </div>
    </div>
    <div class="row my-3">
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
            <label for="doc_desc" class="float-md-right"><span class="d-sm-none d-md-inline"> Doctor </span>
                Detail:</label>
        </div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="far fa-comment-alt"></i></div>
                </div>
                <textarea class="form-control" type="file" id="doc_desc" name="doc_desc"
                          placeholder="Enter Doctor Detail"></textarea>
            </div>
        </div>
    </div>
    <div class="row my-3">
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto"></div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
            <button type="submit" name="add_doc" class="btn btn-primary btn-block"><i class="fas fa-plus"></i>
                Add Now
            </button>
        </div>
    </div>
</form>