<?php

$obj = EntertainmentBL::GetSingle($_GET["Id"]);

?>
<form action="">
    
    <input type="hidden" name="Id" value="<?php echo $obj->get_Id() ?>" />
    
    <h2>
        Update Entertainment</h2>
        <table width="100%">
            
             <tr>
                <td>Name</td>
                <td><input type="text" name="Name" value="<?php echo $obj->get_Name() ?>"/></td>
            </tr>
            
             <tr>
                <td>ImageUrl</td>
                <td><input type="text" name="ImageUrl" value="<?php echo $obj->get_ImageUrl() ?>"/></td>
            </tr>
            
             <tr>
                <td>Url</td>
                <td><input type="text" name="Url" value="<?php echo $obj->get_Url() ?>"/></td>
            </tr>
            
             <tr>
                <td>CategoryId</td>
                   <td>  <select  style="width:150px;"name="CategoryId">
                    
                    <?php
                    
                    $allCategories = EntertainmentCategoryBL::GetAll();
                    
                    foreach ($allCategories as $value) {
                        
                        echo sprintf("<option value=%s>%s</option>",$value->get_Id(),$value->get_Name());
                        
                    }
                    
                    ?>
                    
                </select>
    </td>
            </tr>
        </table>
<input type="submit" value="Update" name="op" />  
</form>


