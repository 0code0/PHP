
<?php

$obj = ClassifiedsBL::GetSingle($_GET["Id"]);

?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="Id" value="<?php echo $obj->get_Id() ?>" />
    <h2>
        Add New Classified</h2>
        <table width="100%">
            
             <tr>
                <td>Title</td>
                <td><input type="text" name="Title" value="<?php echo $obj->get_Title() ?>"/></td>
            </tr>
            <tr>
                <td>Image</td>
            <td><input type="file" name="ImageUrl"/></td>
            </tr>
            <tr>
                <td>Details</td>
                <td><input type="text" name="Details"  value="<?php echo $obj->get_Details() ?>"/></td>
            </tr>
            <tr>
                <td>Category</td>
            <td>
                
                <select name="CategoryId">
                    
                    <?php
                    
                    $allCategories = ClassifiedsCategoryBL::GetAll();
                    
                    foreach ($allCategories as $value) {
                        echo sprintf("<option value='%s'>%s</option>",$value->get_Id(), $value->get_Name());
                    }
                    ?>
                    
                </select>
                
            </td>
            </tr>
            
        </table>
<input type="submit" value="Update" name="op" />  
</form>
