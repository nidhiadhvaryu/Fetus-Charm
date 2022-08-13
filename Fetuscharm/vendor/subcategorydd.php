<?php
include('connection.php');
$cat_ID = $_REQUEST['categoryID'];
?>

<div class="form-group">
    <h5>Sub Category <span class="text-danger"></span></h5>
    <div class="controls">
        <select name="subcategoryselect" id="subcategoryselect" class="form-select" onchange="subcategorydropdown(this.value);">
            <option>Select Subcategory</option>
            <?php
            $dqry = "select * from subcategorytb  where categoryID=$cat_ID";
            $dres = mysqli_query($con, $dqry);
            while ($irow = mysqli_fetch_array($dres)) {
            ?>
                <option value="<?php echo $irow[0] ?>"><?php echo $irow[1] ?></option>
            <?php
            }
            ?>
        </select>
    </div>
    <span id="a2" style="color:red;">
</div>