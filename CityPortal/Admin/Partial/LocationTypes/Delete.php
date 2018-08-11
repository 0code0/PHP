<h2>Delete location type</h2>

<?php

$obj = LocationTypeBL::GetSingle($_GET["id"]);

?>

<p>
    <b>Are you sure you want to delete location type <?php echo $obj->get_Name() ?> ?
        <br>
        All data will be lost permanently.
    </b>
</p>
<form action="">

    <input type="hidden" value="<?php echo $obj->get_Id() ?>" name="Id" />
<input type="submit" value="Yes" name="Delete_Yes" />
<input type="submit" value="No" name="Delete_No" />

</form>