<?php

class AddsBL {

    public static function Add(Adds $ad) {
        AddsDA::Add($ad);
    }

    public static function Update(Adds $ad) {
        AddsDA::Update($ad);
    }

    public static function Delete(Adds $ad) {
        AddsDA::Delete($ad);
    }

    public static function GetAll() {
        return AddsDA::GetAll();
    }

    public static function GetSingle($id) {
        return AddsDA::GetSingle($id);
    }

    public static function GetAllAdsByCategory($categoryId) {

        return AddsDA::GetAllAdsByCategory($categoryId);
    }

}

?>
