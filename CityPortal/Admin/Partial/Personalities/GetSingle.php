<?php

$personality = PersonalityBL::GetSingle($_GET["Id"]);

?>
    <h2>
        Add New Personality</h2>
        <table width="100%">
            
             <tr>
                <td>Name</td>
                <td><?php echo $personality->get_Name() ?></td>
            </tr>
            <tr>
                <td>DOB</td>
                <td><?php echo $personality->get_DOB() ?></td>
            </tr>
            <tr>
                <td>Summary</td>
                <td><?php echo $personality->get_Summary() ?></td>
            </tr>
             <tr>
                <td>ImageUrl</td>
                <td><img src="<?php echo $siteBasePath_Relative.$personality->get_ImageUrl() ?>" /></td>
            </tr>
             
             <tr>
                <td>Personality Type</td>
            <td>
                <?php echo $personality->get_PersonCategoryId() ?>
                
            </td>
            </tr>
        </table>
