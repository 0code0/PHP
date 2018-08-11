
<?php

$obj = NewsBL::GetSingle($_GET["Id"]);

?>

    
<h2>View Detail...</h2>
<table width="100%">
    
    <tr>
        <td>NewsText</td>
        <td><?php echo $obj->get_NewsText() ?></td>
    </tr>
    <tr>
        <td>Category Id</td>
        <td> 
            <?php echo $obj->get_CategoryId() ?>
</td>
    </tr>
    <tr>
        <td>ImageUrl</td>
        <td> <img width="200px" height="200px" src="<?php echo $siteBasePath_Relative . $obj->get_ImageUrl() ?>" /></td>
    </tr>
    <tr>
        <td>Headline</td>
        <td><?php echo $obj->get_Headline() ?></td>
    </tr>
    <tr>
        <td>Date</td>
        <td><?php echo $obj->get_Date() ?></td>
    </tr>
    
</table>
