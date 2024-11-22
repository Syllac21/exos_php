<?php
session_start();
$_SESSION['age'] =48;
$_SESSION['nom'] ='Lacroix';
$_SESSION['prenom'] ='Sylvain';

require_once(__DIR__.'./src/models/Pages.php');
$page = new Pages;

if(isset($_SESSION) && $_SESSION['isLogIn'] == true){
    if(isset($_GET['theme'])){
        switch ($_GET['theme']){
            case 'variables':
                $pageDisplay = $page->variables();
                break;
            case 'conditions':
                $pageDisplay = $page->conditions();
                break;
            case 'boucles':
                $pageDisplay = $page->boucles();
                break;
            case 'tableaux':
                $pageDisplay = $page->tableaux();
                break;
            case 'fonctions':
                $pageDisplay = $page->fonctions();
                break;
            case 'superglobales' :
                $pageDisplay = $page->superglobales();
                break;
            default :
                $pageDisplay = $page->homePage();
                break;
        }
    }else{
        $pageDisplay = $page->homePage();
    }
}else{
    $pageDisplay = $page->login();
}
