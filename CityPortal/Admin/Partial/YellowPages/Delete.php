
<?php

$obj = YellowPagesBL::GetSingle($_GET["Id"]);

?>
<h2>Delete</h2>
<form action="">
    
    <input type="hidden" name="Id" value="<?php echo $obj->get_Id() ?>" /> 
    <b>Are you sure  want to Delete:-<?php echo $obj->get_Name() ?></b>
  <br>
    
    <b>
        All data will be lost and cannot be recovered.
    </b>
    
    <br>



<input type="submit" value="Yes" name="delete_yes" />
<input type="submit" value="No" name="delete_no" />

</form>