<form action="" method="post" enctype="multipart/form-data">
    <h2>
        Add Daily News</h2>
        <table width="100%">
             <tr>
                <td>NewsText</td>
            <td><input type="text" name="NewsText"/></td>
            </tr>
             <tr>
                <td>ImageUrl</td>
            <td><input type="file" name="ImageUrl"/></td>
            </tr>
             <tr>
                <td>Headline</td>
            <td><input type="text" name="Headline"/></td>
            </tr>
            <tr>
                <td>Date</td>
            <td><input type="text" name="Date"/></td>
            </tr>
             <tr>
                <td>CategoryId</td>
            <td> f
                <select style="width:150px;" name="CategoryId">
                    
                    <?php
                    
                    $allNewsCategories = NewsCategoryBL::GetAll();
                    
                    foreach ($allNewsCategories as $value) {
                        
                        echo sprintf("<option value='%s'>%s</option>",$value->get_Id(),$value->get_Name());
                        
                    }
                    
                    ?>
                    
                </select>
                
            </td>
            </tr>
        </table>
<input type="submit" value="Add" name="op" />  
</form>
