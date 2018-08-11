<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/CityPortal1/Admin/Partial/Shared/AllIncludes.php";
$operation = "";

if (isset($_POST["op"])) {
    $operation = $_POST["op"];
}

if ($operation == "Add") {
    $obj = new News();
    $obj->set_NewsText($_POST["NewsText"]);
    $obj->set_Headline($_POST["Headline"]);
    $obj->set_Date($_POST["Date"]);
    $obj->set_CategoryId($_POST["CategoryId"]);
    
    // Image
    
    if(is_uploaded_file($_FILES['ImageUrl']['tmp_name']))
    {
        if($_FILES["ImageUrl"]["error"] > 0)
        {
            
        }
        else
        {
            $ImagePath_Absolute = "$siteBasePath/Uploads/" . $_FILES["ImageUrl"]["name"];
            $ImagePath_Relative = "/Uploads/" . $_FILES["ImageUrl"]["name"];
            
            move_uploaded_file($_FILES["ImageUrl"]["tmp_name"], $ImagePath_Absolute);
            
            $obj->set_ImageUrl($ImagePath_Relative);
        }
    }

    NewsBL::Add($obj);
}

if ($operation == "Update") {
    $obj = new News();
    
    $obj->set_NewsText($_GET["NewsText"]);
    $obj->set_CategoryId($_GET["CategoryId"]);
    $obj->set_Headline($_GET["Headline"]);
    $obj->set_Date($_GET["Date"]);
    $obj->set_ImageUrl($_GET["ImageUrl"]);
    $obj->set_Id($_GET["Id"]);
    NewsBL::Update($obj);
}

if(isset($_GET["delete_yes"]))
{
    $obj = new News();
    $obj->set_Id($_GET["Id"]);
    
    NewsBL::Delete($obj);
    
}

$show = "";
if (isset($_GET["show"])) {
    $show = $_GET["show"];
}
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

                    <h1>Manage  News</h1>
                    <br>

            <?php include "$siteAdminBaseFullPath/Partial/News/GetAll.php"; ?>


                        <br></br>
                        <a href="?show=Add">Add News</a> 
                        <br></br>

<?php
if ($show == "Add") {
    include "$siteAdminBaseFullPath/Partial/News/Add.php";
}

if ($show == "update") {
    include "$siteAdminBaseFullPath/Partial/News/Update.php";
}

if ($show == "delete") {
    include "$siteAdminBaseFullPath/Partial/News/Delete.php";
}
if ($show == "view") {
    include "$siteAdminBaseFullPath/Partial/News/GetSingle.php";
}
?>

                </div>
              <?php
           
            include_once "$siteAdminBaseFullPath/Partial/Shared/RightMenu.php";
           
           ?>
            </div>

        </div>
    </body>
</html>
