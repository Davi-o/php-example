<?php
class Validation{
    public static function crossSiteScripting($exp,$v){
        return htmlspecialchars(trim($v));
    }
    public static function validateName($exp,$v){
        $exp = "/^[a-zA-Z ]{2,20}$/";
    }
    public static function validateSurname($exp,$v){
        $exp = "/^[a-zA-Z ]{2,50}$/";
    }
    public static function validadeBirthDate($exp,$v){
        $exp = "/^[a-zA-Z 0-9]{}$/";
    }
}
