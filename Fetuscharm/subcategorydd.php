<?php
include('connection.php');
$categoryID = $_REQUEST['categoryID'];
?>
<div class="col-md-12 form-group">
    <label class="control-label" for="">Sub Category</label>
        <select required name="subcategoryID" id="selectsubcategory" class="form-control input-md" onchange="subcategorydropdown(this.value);">
            <option value="">Select Sub Category</option>
            <?php

            $dqry = "select * from subcategorytb where categoryID=$categoryID";
            $dres = mysqli_query($con, $dqry);
            while ($irow = mysqli_fetch_array($dres)) {
            ?>
                <option value="<?php echo $irow[0] ?>"><?php echo $irow[1] ?></option>
            <?php
            }
            ?>
        </select>
    </div>
</div>