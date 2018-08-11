<?php

$location = LocationsBL::GetSingle($_GET["Id"]);

?>

<form action=""method="post" enctype="multipart/form-data">
    <input type="hidden" name="Id" value="<?php echo $location->get_Id() ?>" />
    <h2>
        Edit Location</h2>
        <table width="100%">
            
             <tr>
                <td>Name</td>
                <td><input type="text" name="Name" value="<?php echo $location->get_Name() ?>"/></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="Address" value="<?php echo $location->get_Address() ?>"/></td>
            </tr>
            <tr>
                <td>Contact Number</td>
                <td><input type="text" name="ContactNumber" value="<?php echo $location->get_ContactNumber() ?>"/></td>
            </tr>
             <tr>
                <td>ImageUrl</td>
            <td><input type="file" name="ImageUrl"/></td>
            </tr>
             <tr>
                <td>Description</td>
                <td><input type="text" name="Description" value="<?php echo $location->get_Description() ?>"/></td>
            </tr>
             <tr>
                <td>Location Type</td>
            <td>
                <select style="width:150px;" name="LocationTypeId">
                    
                    <?php
                    
                    $allCategories = LocationTypeBL::GetAll();
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
