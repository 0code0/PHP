<h2>All location types</h2>
<br>

<table width="100%">
    <tr>
        <td><b>Location Name</b></td>
        <td><b>Actions</b></td>
    </tr>
    
    <?php
        $all = LocationTypeBL::GetAll();
        
        foreach ($all as $value) {
 
            echo sprintf("<tr><td>%s</td><td> <a href='?id=%s&show=view'>View</a> <a href='?id=%s&show=update'>Edit</a> <a href='?id=%s&show=delete'>Delete</a> </td></tr>",$value->get_Name(),$value->get_Id(),$value->get_Id(),$value->get_Id());
}
    ?>
    
</table>

