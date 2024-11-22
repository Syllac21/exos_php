<?php
$title = 'Les conditions';
$numeroEx=1;

$age = 18;
$genre = 'femme';
$bon = false;

ob_start();
require_once(__DIR__.'../../component/header.php');?>

<main class="container">
    <h1 class="font-bold text-3xl my-5 text-center"><?=$title?></h1>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>vous avez <?=$age?> ans.</p>
        <p>
            vous êtes <?php 
                if($age>=18){
                    echo 'majeur';
                }else{
                    echo 'mineur';
                }
            $numeroEx++ ?>
        </p>
    </article>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>vous avez <?=$age?> ans.</p>
        <p>
            vous êtes <?php
            echo ($genre == 'homme' ? 'un homme' : 'une femme')?>
            et vous êtes <?php 
                if($age>=18){
                    echo 'majeur';
                }else{
                    echo 'mineur';
                }
            $numeroEx++ ?>
        </p>
    </article>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>
            <?php 
                if($genre != 'homme'){
                    echo 'c\'est une développeuse !!!';
                }else{
                    echo 'c\'est un développeur !!!';
                }
            $numeroEx++ ?>
        </p>
    </article>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        
        <p>
            <?php 
                if($age>=18){
                    echo 'Tu es majeur';
                }else{
                    echo 'Tu n\'es pas majeur';
                }
            $numeroEx++ ?>
        </p>
    </article>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        
        <p>
            <?php 
                if($bon){
                    echo 'C\'est ok !!';
                }else{
                    echo 'C\'est pas bon';
                }
            $numeroEx++ ?>
        </p>
    </article>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        
        <p>
            <?php 
                if($bon){
                    echo 'C\'est ok !!';
                }else{
                    echo 'C\'est pas bon';
                }
            $numeroEx++ ?>
        </p>
    </article>
</main>
<?php $content = ob_get_clean(); 

require(__DIR__.'../../component/layout.php');