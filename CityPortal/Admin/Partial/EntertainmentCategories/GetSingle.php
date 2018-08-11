
<?php

$obj = EntertainmentCategoryBL::GetSingle($_GET["Id"]);

?>
 <h2>
        View Detail....</h2>
        <table width="100%">
            
             <tr>
                <td>Name</td>
                <td><?php echo $obj->get_Name() ?></td>
            </tr>
        </table>
  
</form>
