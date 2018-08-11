<?php

$personality = PersonalityBL::GetSingle($_GET["Id"]);

?>
<form action=""method="post" enctype="multipart/form-data">
    
    <input type="hidden" name="Id"  value="<?php echo $personality->get_Id() ?>" />
    
    <h2>
        Add New Personality</h2>
        <table width="100%">
            
             <tr>
                <td>Name</td>
                <td><input type="text" name="Name" value="<?php echo $personality->get_Name() ?>"/></td>
            </tr>
            <tr>
                <td>DOB</td>
                <td><input type="text" name="DOB" value="<?php echo $personality->get_DOB() ?>"/></td>
            </tr>
            <tr>
                <td>Summary</td>
                <td><input type="text" name="Summary" value="<?php echo $personality->get_Summary() ?>"/></td>
            </tr>
             <tr>
                <td>ImageUrl</td>
                <td><input type="file" name="ImageUrl" value="<?php echo $personality->get_ImageUrl() ?>"/></td>
            </tr>
             
             <tr>
                <td>Personality Type</td>
            <td>
                <select style="width:150px;" name="PersonCategoryId">
                    
                    <?php
                    
                    $allCategories = PersonCategoryBL::GetAll();
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
