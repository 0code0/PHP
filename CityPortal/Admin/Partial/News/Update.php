
<?php

$obj = NewsBL::GetSingle($_GET["Id"]);

?>

<form action="">
    
    <input type="hidden" name="Id" value="<?php echo $obj->get_Id() ?>" /> 
    
<h2>Update News</h2>
<table width="100%">
    
    <tr>
        <td>NewsText</td>
        <td><input type="text" name="NewsText" value="<?php echo $obj->get_NewsText() ?>" /></td>
    </tr>
    <tr>
        <td>Category Id</td>
        <td> <select style="width:150px;" name="CategoryId">
                    
                    <?php
                    
                    $allCategories = NewsCategoryBL::GetAll();
                    
                    foreach ($allCategories as $value) {
                        
                        echo sprintf("<option value=%s>%s</option>",$value->get_Id(),$value->get_NewsText());
                        
                    }
                    
                    ?>
                    
                </select>
</td>
    </tr>
    <tr>
        <td>ImageUrl</td>
        <td><input type="text" name="ImageUrl" value="<?php echo $obj->get_ImageUrl() ?>" /></td>
    </tr>
    <tr>
        <td>Headline</td>
        <td><input type="text" name="Headline" value="<?php echo $obj->get_Headline() ?>" /></td>
    </tr>
    <tr>
        <td>Date</td>
        <td><input type="text" name="Date" value="<?php echo $obj->get_Date() ?>" /></td>
    </tr>
    
</table>

<input type="submit" value="Update" name="op" />

</form>