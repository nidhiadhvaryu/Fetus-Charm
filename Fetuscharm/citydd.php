<?php
include('connection.php');
$stateID = $_REQUEST['stateID'];
?>

<div class="form-group">

    <div class="controls">
        <select name="cityselect" id="cityselect" class="form-control input-md" onchange="citydropdown(this.value);">
            <option>Select City</option>
            <?php

            $dqry = "select * from citytb where stateID=$stateID";
            $dres = mysqli_query($con, $dqry);
            while ($irow = mysqli_fetch_array($dres)) {
            ?>
                <option value="<?php echo $irow[0] ?>"><?php echo $irow[1] ?></option>
            <?php
            }
            ?>
        </select>
    </div>
    <span id="a13" style="color:red;">
</div>