<h2>All Locations</h2>
                <table width="100%">
                    <tr>
                        <td style="width: 400px"><b>Name</b></td>
                        <td ><b>Action</b></td>
                    </tr>
                     <?php
                        
                        $allCategories = PersonalityBL::GetAll();
                        
                        foreach ($allCategories as $value) {
                            
                            echo sprintf("<tr><td>%s</td><td> <a href='?Id=%s&show=update'>Edit</a> <a href='?Id=%s&show=view'>View</a> <a href='?Id=%s&show=delete'>Delete</a> </td></tr>",$value->get_Name(),$value->get_Id(),$value->get_Id(),$value->get_Id());
                            
                        }
                        ?>
                </table>