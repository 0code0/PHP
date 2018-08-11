<form action=""method="post" enctype="multipart/form-data">
    <h2>
        Add New Yellow Page</h2>
        <table width="100%">
             <tr>
                <td>Name</td>
            <td><input type="text" name="Name"/></td>
            </tr>
             <tr>
                <td>Address</td>
            <td><input type="text" name="Address"/></td>
            </tr>
             <tr>
                <td>Description</td>
            <td><input type="text" name="Description"/></td>
            </tr>
            <tr>
                <td>Image</td>
            <td><input type="file" name="Image"/></td>
            </tr>
             <tr>
                <td>CategoryId</td>
                <td>
                      <select  style="width:150px;"name="CategoryId">
                    
                    <?php
                    
                    $allCategories = YellowPageCategoriesBL::GetAll();
                    
                    foreach ($allCategories as $value) {
                        
                        echo sprintf("<option value=%s>%s</option>",$value->get_Id(),$value->get_Name());
                        
                    }
                    
                    ?>
                    
                </select>
                
              
                </td>
            </tr>
        </table>
    <input type="submit" value="Add" name="op" />
</form>
