<h2>Delete picture</h2>

<?php

$obj = PictureBL::GetSingle($_GET["id"]);

?>

<p>
    <b>Are you sure you want to delete picture category <?php echo $obj->get_Title() ?> ?
        <br>
        All data will be lost permanently.
    </b>
</p>
<form action="">

    <input type="hidden" value="<?php echo $obj->get_Id() ?>" name="Id" />
<input type="submit" value="Yes" name="Delete_Yes" />
<input type="submit" value="No" name="Delete_No" />

</form>