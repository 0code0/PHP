<?php
$obj = EntertainmentBL::GetSingle($_GET["Id"]);
?>


<h2>
    View Detail..</h2>
<table width="100%">

    <tr>
        <td>Name</td>
        <td><?php echo $obj->get_Name() ?></td>
    </tr>

    <tr>
        <td>ImageUrl</td>
        <td><img width="200px" height="200px" src="<?php echo $siteBasePath_Relative . $obj->get_ImageUrl() ?>" /></td>
    </tr>

    <tr>
        <td>Url</td>
        <td><?php echo $obj->get_Url() ?></td>
    </tr>

    <tr>
        <td>CategoryId</td>
        <td><?php echo $obj->get_CategoryId() ?></td>
</tr>
</table>



