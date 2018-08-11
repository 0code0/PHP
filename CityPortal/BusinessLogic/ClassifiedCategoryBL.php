<?php

class ClassifiedsCategoryBL {

    public static function Add(ClassifiedsCategory $ec) {
        ClassifiedsCategoryDA::Add($ec);
    }

    public static function Update(ClassifiedsCategory $ec) {
        ClassifiedsCategoryDA::Update($ec);
    }

    public static function Delete(ClassifiedsCategory $ec) {
        ClassifiedsCategoryDA::Delete($ec);
    }

    public static function GetAll() {
        return ClassifiedsCategoryDA::GetAll();
    }

    public static function GetSingle($id) {
        return ClassifiedsCategoryDA::GetSingle($id);
    }

}

?>
