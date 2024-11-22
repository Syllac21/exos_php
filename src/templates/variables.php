<?php
$title = 'Les variables';
$numeroEx=1;

$nom = 'Lacroix';
$prenom ='Sylvain';
$age = 48;
$km = 1;
$taille = 1.87;
$enFormation = true;
$int = null;
$prem = 3+4;
$deux = 5*20;
$troi = 45/5;


ob_start();
require_once(__DIR__.'../../component/header.php');?>

<main class="container">
    <h1 class="font-bold text-3xl my-5 text-center"><?=$title?></h1>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>
            
            mon nom est <?=$nom?> 
            <?php $numeroEx++ ?>
        </p>
    </article>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>
            
            Je m'appelle <?=$prenom?> <?=$nom?> et j'ai <?=$age?> ans
            <?php $numeroEx++ ?>
        </p>
    </article>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
    <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>
            valeur initiale = <?=$km?> km.
            <?php $km = 3;?>
            Puis <?=$km?> km
            <?php $km = 125;?>
            Et <?=$km?> km
        </p>
        <?php $numeroEx++ ?>
    </article>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>
            Je m'appelle <?=$prenom?> <?=$nom?> je mesure <?=$taille?> m et je suis en formation : <?=$enFormation?>
        </p>
        <?php $numeroEx++ ?>
    </article>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>
            voilà int :
            <?php
                echo $int;
                $int = 42;
            ?>
        </p>

        <p>Et voilà le nouvel int : <?=$int?></p>
        <?php $numeroEx++ ?>
    </article>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>
            
            Bonjour <?=$prenom?>, comment vas tu?
            <?php $numeroEx++ ?>
        </p>
    </article>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>
            Bonjour <?=$prenom?> <?=$nom?> tu as <?=$age?> ans.
        </p>
        <?php $numeroEx++ ?>
    </article>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>
            Première variable : <?=$prem?>
        </p>
        <p>
            Deuxième variable : <?=$deux?>
        </p>
        <p>
            Troisième variable : <?=$troi?>
        </p>
        <?php $numeroEx++ ?>
    </article>

</main>
<?php $content = ob_get_clean(); 

require(__DIR__.'../../component/layout.php');