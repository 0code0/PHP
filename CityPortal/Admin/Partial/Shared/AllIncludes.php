<?php

$siteAdminBasePath = "/CityPortal1/Admin";
$siteBasePath_Relative = "/CityPortal1";
$siteAdminBaseFullPath = $_SERVER["DOCUMENT_ROOT"] . "/CityPortal1/Admin";
$siteBasePath = $_SERVER["DOCUMENT_ROOT"] . "/CityPortal1";

require_once "$siteBasePath/BusinessObject/Adds.php";
require_once "$siteBasePath/BusinessObject/Entertainment.php";
require_once "$siteBasePath/BusinessObject/EntertainmentCategory.php";
require_once "$siteBasePath/BusinessObject/News.php";
require_once "$siteBasePath/BusinessObject/NewsCategory.php";
require_once "$siteBasePath/BusinessObject/YellowpageCategories.php";
require_once "$siteBasePath/BusinessObject/YellowPages.php";
require_once "$siteBasePath/BusinessObject/Location.php";
require_once "$siteBasePath/BusinessObject/LocationType.php";
require_once "$siteBasePath/BusinessObject/PersonCategory.php";
require_once "$siteBasePath/BusinessObject/Personality.php";
require_once "$siteBasePath/BusinessObject/Picture.php";
require_once "$siteBasePath/BusinessObject/PictureCategory.php";
require_once "$siteBasePath/BusinessObject/ClassifiedsCategory.php";
require_once "$siteBasePath/BusinessObject/Classifieds.php";
require_once "$siteBasePath/BusinessObject/User.php";

require_once "$siteBasePath/BusinessLogic/AddsBL.php";
require_once "$siteBasePath/BusinessLogic/EntertainmentBL.php";
require_once "$siteBasePath/BusinessLogic/EntertainmentCategoryBL.php";
require_once "$siteBasePath/BusinessLogic/NewsBL.php";
require_once "$siteBasePath/BusinessLogic/NewsCategoryBL.php";
require_once "$siteBasePath/BusinessLogic/YellowpageCategoriesBL.php";
require_once "$siteBasePath/BusinessLogic/YellowPagesBL.php";
require_once "$siteBasePath/BusinessLogic/LocationBL.php";
require_once "$siteBasePath/BusinessLogic/LocationTypeBL.php";
require_once "$siteBasePath/BusinessLogic/PersonCategoryBL.php";
require_once "$siteBasePath/BusinessLogic/PersonalityBL.php";
require_once "$siteBasePath/BusinessLogic/PictureBL.php";
require_once "$siteBasePath/BusinessLogic/PictureCategoryBL.php";
require_once "$siteBasePath/BusinessLogic/ClassifiedCategoryBL.php";
require_once "$siteBasePath/BusinessLogic/ClassifiedsBL.php";
require_once "$siteBasePath/BusinessLogic/UserBL.php";

require_once "$siteBasePath/DataAccess/BaseDA.php";

require_once "$siteBasePath/DataAccess/AddsDA.php";
require_once "$siteBasePath/DataAccess/EntertainmentDA.php";
require_once "$siteBasePath/DataAccess/EntertainmentCategoryDA.php";
require_once "$siteBasePath/DataAccess/NewsDA.php";
require_once "$siteBasePath/DataAccess/NewsCategoryDA.php";
require_once "$siteBasePath/DataAccess/YellowpageCategoriesDA.php";
require_once "$siteBasePath/DataAccess/YellowPagesDA.php";
require_once "$siteBasePath/DataAccess/LocationDA.php";
require_once "$siteBasePath/DataAccess/LocationTypeDA.php";
require_once "$siteBasePath/DataAccess/PersonCategoryDA.php";
require_once "$siteBasePath/DataAccess/PersonalityDA.php";
require_once "$siteBasePath/DataAccess/PictureDA.php";
require_once "$siteBasePath/DataAccess/PictureCategoryDA.php";
require_once "$siteBasePath/DataAccess/ClassifiedCategoryDA.php";
require_once "$siteBasePath/DataAccess/ClassifiedsDA.php";
require_once "$siteBasePath/DataAccess/UserDA.php";

?>