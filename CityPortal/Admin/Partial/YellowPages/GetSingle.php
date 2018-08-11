
<?php

$obj = YellowPagesBL::GetSingle($_GET["Id"]);

?>

<h2>View Detail...</h2>
<table width="100%">
    
    <tr>
        <td>Name</td>
        <td><?php echo $obj->get_Name() ?></td>
    </tr>
    <tr>
        <td>Category Id</td>
        <td>     
            <?php echo $obj->get_CategoryId() ?></td>
    </tr>
    <tr>
        <td>Image</td>
      <td>  <img width="200px" height="200px" src="<?php echo $siteBasePath_Relative . $obj->get_Image() ?>" /></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?php echo $obj->get_Address() ?></td>
    </tr>
    <tr>
        <td>Description</td>
        <td><?php echo $obj->get_Description() ?></td>
    </tr>
    
</table>
