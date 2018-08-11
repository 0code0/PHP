<?php

class EntertainmentCategoryBL {

    public static function Add(Entertainmentcategory $ec) {
        EntertainmentcategoryDA::Add($ec);
    }

    public static function Update(Entertainmentcategory $ec) {
        EntertainmentcategoryDA::Update($ec);
    }

    public static function Delete(EntertainmentCategory $ec) {
        EntertainmentcategoryDA::Delete($ec);
    }

    public static function GetAll() {
        return EntertainmentcategoryDA::GetAll();
    }

    public static function GetSingle($id) {
        return EntertainmentcategoryDA::GetSingle($id);
    }

}

?>
