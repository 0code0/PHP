<?php

class EntertainmentBL {

    public static function Add(Entertainment $entertain) {
        EntertainmentDA::Add($entertain);
    }

    public static function Update(Entertainment $entertain) {
        EntertainmentDA::Update($entertain);
    }

    public static function Delete(Entertainment $entertain) {
        EntertainmentDA::Delete($entertain);
    }

    public static function GetAll() {
        return EntertainmentDA::GetAll();
    }

    public static function GetSingle($id) {
        return EntertainmentDA::GetSingle($id);
    }
    
    public static function GetAllByCategory($categoryId)
    {
        return EntertainmentDA::GetAllByCategory($categoryId);
    }

}

?>
