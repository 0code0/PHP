 <h2>All News</h2>
                <br>
       			
                    <table width="100%" >
                        
                        <tr style="">
                            <td style="width:400px;"><b> News</b></td>
                            <td><b>Actions</b></td>
                        </tr>
                        
                        <?php
                        
                        $allCategories = NewsBL::GetAll();
                        
                        foreach ($allCategories as $value) {
                            
                            echo sprintf("<tr><td>%s</td><td> <a href='?Id=%s&show=update'>Edit</a> <a href='?Id=%s&show=view'>View</a> <a href='?Id=%s&show=delete'>Delete</a> </td></tr>",$value->get_NewsText(),$value->get_Id(),$value->get_Id(),$value->get_Id());
                            
                        }
                        ?>
                        
                    </table>
                     		