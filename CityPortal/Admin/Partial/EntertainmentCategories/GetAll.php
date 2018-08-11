<h2>All Categories</h2>
                <br>
       			
                    <table width="100%" >
                        
                        <tr style="">
                            <td style="width:400px;"><b>Category Name</b></td>
                            <td><b>Actions</b></td>
                        </tr>
                        
                        <?php
                        
                        $allCategories = EntertainmentCategoryBL::GetAll();
                        
                        foreach ($allCategories as $value) {
                            
                            echo sprintf("<tr><td>%s</td><td> <a href='?Id=%s&show=update'>Edit</a> <a href='?Id=%s&show=view'>View</a> <a href='?Id=%s&show=delete'>Delete</a> </td></tr>",$value->get_Name(),$value->get_Id(),$value->get_Id(),$value->get_Id());
                            
                        }
                        ?>
                        
                    </table>