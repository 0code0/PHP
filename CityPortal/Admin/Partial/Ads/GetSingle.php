
<?php

$obj = AddsBL::GetSingle($_GET["Id"]);

?>

 
<h2>View Detail</h2>
<table width="100%">
    
    <tr>
        <td>Name</td>
        <td><?php echo $obj->get_Name() ?></td>
    </tr>
    <tr>
        <td>Category Id</td>
        <td><?php echo $obj->get_CategoryId() ?></td> 
        
    
    </tr>
    <tr>
        <td>Image</td>
        <td><img width="200px" height="200px" src="<?php echo  $siteBasePath_Relative . $obj->get_Image() ?>" /> </td>
    </tr>
    
</table>
