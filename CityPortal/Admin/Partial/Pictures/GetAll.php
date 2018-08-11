<h2>All picture</h2>
<br>

<table width="100%">
    <tr>
        <td><b>Title</b></td>
        <td><b>Actions</b></td>
    </tr>
    
    <?php
        $all = PictureBL::GetAll();
        
        foreach ($all as $value) {
 
            echo sprintf("<tr><td>%s</td><td> <a href='?id=%s&show=view'>View</a> <a href='?id=%s&show=update'>Edit</a> <a href='?id=%s&show=delete'>Delete</a> </td></tr>",$value->get_Title(),$value->get_Id(),$value->get_Id(),$value->get_Id());
}
    ?>
    
</table>

