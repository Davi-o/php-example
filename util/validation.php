<?php
class Validation{
    public static function crossSiteScripting($v){
        return htmlspecialchars(trim($v));
    }
    public static function validateName($v){
        $exp = "/^[a-zA-Z ]{2,20}$/";
        return trim(preg_match($exp,$v));
    }
    public static function validateSurname($v){
        $exp = "/^[a-zA-Z ]{2,50}$/";
        return trim(preg_match($exp,$v));
    }
    public static function validadeBirthDate($v){
        $exp = "/^[a-zA-Z 0-9]{}$/";
        return trim(preg_match($exp,$v));
    }
}
