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
}