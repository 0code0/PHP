
<?php

$obj = NewsBL::GetSingle($_GET["Id"]);

?>
<b>Delete</b>
<form action="">
    
    <input type="hidden" name="Id" value="<?php echo $obj->get_Id() ?>" /> 
    <br>
    
    <b>Are you sure to want to delete:-<?php echo $obj->get_NewsText() ?></b>
     <br>
    
    <b>
        All data will be lost and cannot be recovered.
    </b>
    
    <br>


<input type="submit" value="Yes" name="delete_yes" />
<input type="submit" value="No" name="delete_no" />

</form>