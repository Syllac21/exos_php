<?php
$title = 'Les tableaux';
$numeroEx=1;
$hdf = [
    02 => 'Aines',
    59 => 'Nord',
    60 => 'Oise',
    62 => 'Pas-de-Calais',
    80 => 'Somme',
];

$mois =['janvier','février','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','décembre'];

ob_start();
require_once(__DIR__.'../../component/header.php');?>

<main class="container">
    <h1 class="font-bold text-3xl my-5 text-center"><?=$title?></h1>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>
            <?php 
            var_dump($mois);
            $numeroEx++ ?>
        </p>
    </article>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>
            <?php 
            echo $mois[2];
            $numeroEx++ ?>
        </p>
    </article>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>
            <?php 
            echo $mois[5];
            $numeroEx++ ?>
        </p>
    </article>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>
            <?php   
            echo $mois[7].' ';
            $mois[7]='août';
            echo $mois[7];
            $numeroEx++ ?>
        </p>
    </article>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>
            <?php   
            var_dump($hdf);
            $numeroEx++ ?>
        </p>
    </article>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>
            <?php   
            echo $hdf[59];
            $numeroEx++ ?>
        </p>
    </article>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>
            <?php
            $hdf[51] = 'Marne';   
            echo $hdf[51];
            $numeroEx++ ?>
        </p>
    </article>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>
            <?php
            foreach($mois as $unMois){
                echo $unMois.' ';
            }
            $numeroEx++ ?>
        </p>
    </article>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>
            <?php
            foreach($hdf as $dep){
                echo $dep.' ';
            }
            $numeroEx++ ?>
        </p>
    </article>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>
            <?php
            foreach($hdf as $num=>$dep){
                echo ('Le département '.$dep.' a le numéro '. $num.'. ');
            }
            $numeroEx++ ?>
        </p>
    </article>
</main>
<?php $content = ob_get_clean(); 

require(__DIR__.'../../component/layout.php');