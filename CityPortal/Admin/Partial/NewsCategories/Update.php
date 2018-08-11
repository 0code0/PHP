<?php

$obj = NewsCategoryBL::GetSingle($_GET["Id"]);

?>

<form action="">
    
    <input type="hidden" name="Id" value="<?php echo $obj->get_Id() ?>" />
    
    <h2>
        Update News Category</h2>
        <table width="100%">
            
             <tr>
                <td>Name</td>
                <td><input type="text" name="Name" value="<?php echo $obj->get_Name() ?>"/></td>
            </tr>
        </table>
<input type="submit" value="Update" name="op" />  
</form>
