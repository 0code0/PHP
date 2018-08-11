<h2>Edit picture category</h2>

<?php

$obj = PictureBL::GetSingle($_GET["id"]);

?>
<h2>Add new picture</h2>

<form action="">

    <input type="hidden" value="<?php echo $obj->get_Id() ?>" name="Id" />
<table width="100%">
    
    <tr>
        <td>Title</td>
        <td><input type="text" name="Title" value="<?php echo $obj->get_Title() ?>" /></td>
    </tr>
    <tr>
        <td>Image</td>
        <td><input type="text" name="ImageUrl" value="<?php echo $obj->get_ImageUrl() ?>" /></td>
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

<input type="submit" value="Update" name="op" />

</form>