<?php

include_once $_SERVER["DOCUMENT_ROOT"]."/CityPortal1/Partials/Shared/PageTopSection.php";

?>
<div id="centerContainer">
                        <div id="leftContainer">
                            <?php 
                                include_once $_SERVER["DOCUMENT_ROOT"]."/CityPortal1/Partials/Locations/LocationTypes.php";
                            ?>

                        <div id="adsSmall">
                        
                        <img src="Uploads/madan1.jpg" />

                        </div>

                            <div>
                                <div class="boxyellow_head">
                                    <strong>Login</strong></div>
                                <div class="box">
                                    <div class="boxInner">
                                        <?php
                                        include_once $_SERVER["DOCUMENT_ROOT"]."/CityPortal1/Partials/Shared/LoginBox.php";
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="spacer10"></div>
                            <div>
                                <div class="boxyellow_head">
                                    <strong>City Guide</strong></div>
                                <div class="box">
                                    <div class="boxInner">
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="spacer10"></div>
                            </div>
                        <div id="rightContainer">
                          <div id="ads">
                          
                          <img src="Uploads/kennel2.jpg" />

                          </div>
                           
                            <?php 
                                include_once $_SERVER["DOCUMENT_ROOT"]."/CityPortal1/Partials/Locations/LocationsSummaryByType.php";
                            ?>
                           
                        </div>
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
    
     <div class="footer">
        <div class="footermid">
           Copyright Baba Farid University
            <div class="clear">
            </div>
        </div>
    </div>
    </div>
</body>
</html>
