<?php

$obj = PictureBL::GetSingle($_GET["id"]);

?>
<h2>Details</h2>

<table width="100%">
    
    <tr>
        <td>Title</td>
        <td><?php echo $obj->get_Title() ?></td>
    </tr>
    <tr>
        <td>Image</td>
        <td> <img src="<?php echo $siteBasePath_Relative . $obj->get_ImageUrl() ?>" /></td>
    </tr>
    <tr>
        <td>Category</td>
        <td>
            <?php echo $obj->get_CategoryId() ?>
        </td>
    </tr>
    
</table>
