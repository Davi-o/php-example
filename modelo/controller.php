<?php
include_once 'class.php';
include_once '../dao/dao.class.php';
include_once '../dao/database.class.php';
include_once '../util/padronization.php';
include_once '../util/validation.php';

if(isset($_POST['txtname'])){
    $pers = new Pessoa();
    $db = new classDAO();
    $pers->name=Padronization::toLowerCase(Validation::crossSiteScripting(Validation::validateName($_POST['txtname'])));
    $pers->surname=Padronization::toLowerCase(Validation::crossSiteScripting(Validation::validateSurname($_POST['txtsurname'])));
    $pers->age=($_POST['txtage']);
    //var_dump($pers);
    $db->registPerson($pers);
    unset($_POST);
    //var_dump($db);
    // $db->registPerson($pers);

}else{
    echo 'Nome inválido';
}    

