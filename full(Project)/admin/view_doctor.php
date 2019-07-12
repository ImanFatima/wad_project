<div class="row">
    <div class="col-sm-12">
        <h1>Doctor</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $get_doc = "select * from doctor";
            $run_doc = mysqli_query($con,$get_doc);
            $count_doc = mysqli_num_rows($run_doc);
            if($count_doc==0){
                echo "<h2> No Doctors found in selected criteria </h2>";
            }
            else {
                $i = 0;
                while ($row_doc = mysqli_fetch_array($run_doc)) {
                    $doc_id = $row_doc['doc_id'];
                    $doc_name = $row_doc['doc_name'];
                    $doc_image = $row_doc['doc_image'];
                    ?>
                    <tr>
                        <th scope="row"><?php echo ++$i; ?></th>
                        <td><?php echo $doc_name; ?></td>
                        <td><img class="img-thumbnail" src='images/<?php echo $doc_image;?>' width='80' height='80'></td>
                        <td><a href="index.php?edit_doctor=<?php echo $doc_id?>" class="btn btn-primary">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <a href="index.php?del_doctor=<?php echo $doc_id?>" class="btn btn-danger">
                                <i class="fa fa-trash-alt"></i> Delete
                            </a>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>