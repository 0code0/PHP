<?php

$location = LocationsBL::GetSingle($_GET["Id"]);

?>
<h2>
        Edit Location</h2>
        <table width="100%">
            
             <tr>
                <td>Name</td>
                <td><?php echo $location->get_Name() ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo $location->get_Address() ?></td>
            </tr>
            <tr>
                <td>Contact Number</td>
                <td><?php echo $location->get_ContactNumber() ?></td>
            </tr>
             <tr>
                <td>ImageUrl</td>
                <td><img src="<?php echo $siteBasePath_Relative.$location->get_ImageUrl() ?>" /></td>
            </tr>
             <tr>
                <td>Description</td>
                <td><?php echo $location->get_Description() ?></td>
            </tr>
             <tr>
                <td>Location Type</td>
            <td>
                <?php $location->get_LocationTypeId() ?>
            </td>
            </tr>
        </table>
