<h2>Edit location type</h2>

<?php

$obj = LocationTypeBL::GetSingle($_GET["id"]);

?>

<form action="">

    <input type="hidden" value="<?php echo $obj->get_Id() ?>" name="Id" />
<table width="100%">
    
    <tr>
        <td>Name</td>
        <td><input type="text" value="<?php echo $obj->get_Name() ?>" name="Name" /></td>
    </tr>
    
</table>

<input type="submit" value="Update" name="op" />

</form>