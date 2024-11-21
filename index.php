<?php
require_once(__DIR__.'./src/models/Pages.php');
$page = new Pages;

if(isset($_GET['theme'])){
    switch ($_GET['theme']){
        case 'variables':
            $pageDisplay = $page->variables();
            break;
        default :
            $pageDisplay = $page->homePage();
            break;
    }
}else{
    $pageDisplay = $page->homePage();
}