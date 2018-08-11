<?php

echo "checking cookie...";

if(isset($_COOKIE["UserId"]))
{
    echo "inside if";
    echo $_COOKIE["UserId"];
    if($_COOKIE["UserRole"] !== "Admin")
    {
        header("Location: /CityPortal1/login.php?redirect=/cityportal1/admin");
    }
}
else
{
    header("Location: /CityPortal1/login.php?redirect=/cityportal1/admin");
}

?>
<div id="header">
        	<h2>CityPortal Admin</h2>
    <div id="topmenu">
            	
          </div>
      </div>