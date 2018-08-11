<?php

$siteAdminBasePath = "/CityPortal1/Admin";
$siteAdminBaseFullPath = $_SERVER["DOCUMENT_ROOT"] . "/CityPortal1/Admin";
include_once $_SERVER["DOCUMENT_ROOT"] . "/CityPortal1/Admin/Partial/Shared/AllIncludes.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dashboard - Admin Template</title>
<link rel="stylesheet" type="text/css" href="<?php echo "$siteAdminBasePath/Theme/css/theme.css" ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo "$siteAdminBasePath/Theme/css/style.css" ?>" />
<script>
   var StyleFile = "theme" + document.cookie.charAt(6) + ".css";
   document.writeln('<link rel="stylesheet" type="text/css" href="css/' + StyleFile + '">');
</script>
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="css/ie-sucks.css" />
<![endif]-->
</head>

<body>
	<div id="container">
    	
            <?php 
            
            include_once "$siteAdminBaseFullPath/Partial/Shared/Header.php";
            
            ?>
        
        <div id="wrapper">
            <div id="content">
       			
            </div>
           <?php
           
            include_once "$siteAdminBaseFullPath/Partial/Shared/RightMenu.php";
           
           ?>
      </div>
        
</div>
</body>
</html>
