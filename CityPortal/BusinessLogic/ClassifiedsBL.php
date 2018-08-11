<?php

class ClassifiedsBL {

    public static function Add(Classifieds $ec) {
        ClassifiedsDA::Add($ec);
    }

    public static function Update(Classifieds $ec) {
        ClassifiedsDA::Update($ec);
    }

    public static function Delete(Classifieds $ec) {
        ClassifiedsDA::Delete($ec);
    }

    public static function GetAll() {
        return ClassifiedsDA::GetAll();
    }
    
    public static function GetAllByCategory($categoryId) {
        return ClassifiedsDA::GetAllByCategory($categoryId);
    }

    public static function GetSingle($id) {
        return ClassifiedsDA::GetSingle($id);
    }

}

?>
