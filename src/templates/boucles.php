<?php
$title = 'Les boucles';
$numeroEx=1;

$var1 = 1;


ob_start();
require_once(__DIR__.'../../component/header.php');?>

<main class="container">
    <h1 class="font-bold text-3xl my-5 text-center"><?=$title?></h1>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>
            <?php 
                for($index =0 ; $index<10 ; $index++){
                    echo $index.' ';
                }
            $numeroEx++ ?>
        </p>
    </article>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>
            <?php 
                for($index =0 ; $index<=20 ; $index++){
                    echo $index.': ';
                    echo $index*$var1.' ';
                }
            $numeroEx++ ?>
        </p>
    </article>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>
            <?php 
                for($index =100 ; $index>10 ; $index--){
                    echo $index.': ';
                    echo $index/$var1.' ';
                }
            $numeroEx++ ?>
        </p>
    </article>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>
            <?php 
                for($index =1 ; $index<10 ; $index+=$index/2){
                    echo $index.' ';
                }
            $numeroEx++ ?>
        </p>
    </article>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>
            <?php 
                for($index = 1 ; $index <= 15 ; $index++){
                    echo $index.' on y arrive presque ';
                }
            $numeroEx++ ?>
        </p>
    </article>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>
            <?php 
                for($index = 20 ; $index >= 0 ; $index--){
                    echo $index.' c\'est presque bon ';
                }
            $numeroEx++ ?>
        </p>
    </article>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>
            <?php 
                for($index = 1 ; $index <= 100 ; $index = $index + 15){
                    echo $index.' on tient le bon bout ';
                }
            $numeroEx++ ?>
        </p>
    </article>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>
            <?php 
                for($index = 200 ; $index >= 0 ; $index = $index - 12){
                    echo $index.' enfin!!! ';
                }
            $numeroEx++ ?>
        </p>
    </article>
</main>
<?php $content = ob_get_clean(); 

require(__DIR__.'../../component/layout.php');