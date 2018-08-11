
<?php

$obj = ClassifiedsBL::GetSingle($_GET["Id"]);

?>
<h2>Delete</h2>
<form action="">
    
    <input type="hidden" name="Id" value="<?php echo $obj->get_Id() ?>" />
    
    <b>Are you sure  want to delete:-<?php echo $obj->get_Title() ?>
        </b>
        
<input type="submit" value="Yes" name="delete_yes" />  
<input type="submit" value="No" name="delete_no" />
</form>
