
<?php

$obj = AddsBL::GetSingle($_GET["Id"]);

?>

<form action="">
    
    <input type="hidden" name="Id" value="<?php echo $obj->get_Id() ?>" /> 
    
<h2>Update Advertisement</h2>
<table width="100%">
    
    <tr>
        <td>Name</td>
        <td><input type="text" name="Name" value="<?php echo $obj->get_Name() ?>" /></td>
    </tr>
    <tr>
        <td>Category Id</td>
        <td> <select style="width:150px;" name="CategoryId">
                    
                    <?php
                    
                    $allCategories = AddsBL::GetAll();
                    
                    foreach ($allCategories as $value) {
                        
                        echo sprintf("<option value=%s>%s</option>",$value->get_Id(),$value->get_Name());
                        
                    }
                    
                    ?>
                    
                </select>
    </td>
    </tr>
    <tr>
        <td>Image</td>
        <td><input type="text" name="Image" value="<?php echo $obj->get_Image() ?>" /></td>
    </tr>
    
</table>

<input type="submit" value="Update" name="op" />

</form>