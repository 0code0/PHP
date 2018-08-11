<form action="" method="post" enctype="multipart/form-data">
    <h2>
        Add New Entertainment Data</h2>
        <table width="100%">
            
             <tr>
                <td>Name</td>
            <td><input type="text" name="Name"/></td>
            </tr>
             <tr>
                <td>ImageUrl</td>
            <td><input type="file" name="ImageUrl"/></td>
            </tr>
             <tr>
                <td>Url</td>
            <td><input type="text" name="Url"/></td>
            </tr>
             <tr>
                <td>CategoryId</td>
            <td>
                <select style="width:150px;" name="CategoryId">
                    
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
<input type="submit" value="Add" name="op" />   
</form>
