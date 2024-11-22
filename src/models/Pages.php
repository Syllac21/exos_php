<?php


class Pages{
    public function homePage()
    {
        require_once(dirname(__DIR__,2).'/src/templates/home.php');
    }

    public function variables()
    {
        require_once(dirname(__DIR__,2).'/src/templates/variables.php');
    }

    public function conditions()
    {
        require_once(dirname(__DIR__,2).'/src/templates/conditions.php');
    }
    public function boucles()
    {
        require_once(dirname(__DIR__,2).'/src/templates/boucles.php');
    }
    public function tableaux()
    {
        require_once(dirname(__DIR__,2).'/src/templates/tableaux.php');
    }
    public function fonctions()
    {
        require_once(dirname(__DIR__,2).'/src/templates/fonctions.php');
    }
    public function superglobales()
    {
        require_once(dirname(__DIR__,2).'/src/templates/superglobales.php');
    }
    public function login()
    {
        require_once(dirname(__DIR__,2).'/src/templates/login.php');
    }
}