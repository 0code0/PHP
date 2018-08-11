<?php

class LocationsBL {
    
    public static function Add(Location $location)
    {
        LocationsDA::Add($location);
    }
    
    public static function Update(Location $location)
    {
        LocationsDA::Update($location);
    }
    
    public static function Delete(Location $location)
    {
        LocationsDA::Delete($location);
    }
    
    public static function GetAll()
    {
        return LocationsDA::GetAll();
    }
    
    public static function GetSingle($id)
    {
        return LocationsDA::GetSingle($id);
    }
    
    public static function GetAllByLocationType($locationTypeId)
    {
        return LocationsDA::GetAllByLocationType($locationTypeId);
    }
    
}

?>
