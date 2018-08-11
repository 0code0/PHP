

<form action="" method="post" enctype="multipart/form-data">
<h2>Add new Advertisement</h2>
<table width="100%">
    
    <tr>
        <td>Name</td>
        <td><input type="text" name="Name" /></td>
    </tr>
    
    <tr>
        <td>Category Id</td>
        <td>  <select  style="width:150px;"name="CategoryId">
                    
                    <?php
                    
                    $allCategories = YellowPageCategoriesBL::GetAll();
                    
                    foreach ($allCategories as $value) {
                        
                        echo sprintf("<option value=%s>%s</option>",$value->get_Id(),$value->get_Name());
                        
                    }
                    
                    ?>
                    
                </select>
                
              </td>
    </tr>
    <tr>
        <td>Image</td>
        <td><input type="file" name="Image" /></td>
    </tr>
    
</table>

<input type="submit" value="Add" name="op" />

</form>