<h2>Add new picture</h2>

<form action="" method="post" enctype="multipart/form-data">

<table width="100%">
    
    <tr>
        <td>Title</td>
        <td><input type="text" name="Title" /></td>
    </tr>
    <tr>
        <td>Image</td>
        <td>
            
            <input type="file" name="ImageUrl" />
            
        </td>
    </tr>
    <tr>
        <td>Category</td>
        <td>
            <select name="CategoryId">
                
                <?php 
                
                $all = PictureCategoryBL::GetAll();
                
                foreach ($all as $value) {
                    
                    echo sprintf("<option value='%s'>%s</option>",$value->get_Id(), $value->get_Name());
                    
                }
                
                ?>
                
            </select>
            
        </td>
    </tr>
    
</table>

<input type="submit" value="Add" name="op" />

</form>