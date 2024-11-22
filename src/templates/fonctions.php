<?php
$title = 'Les fonctions';
$numeroEx=1;

$int1 = 42;
$int2 = 8;
$string1= 'réponse ';
$nom = 'Lacroix';
$prenom ='Sylvain';
$age = 48;
$genre = 'homme';

function returnTrue() : bool {
    return true;
}

function returnString($string) : string {
    return $string;
}

function return2String($string1,$string2){
    return $string1.$string2;
}

function compare($int1,$int2) : string {
    $reponse = ($int1 == $int2) ? 'les deux nombres sont égaux' : (($int1<$int2) ? 'le premier nombre est plus petit' : 'le premier nombre est plus grand');
    return $reponse;
}

function returnStringInt($string1,$int1): string{
    $reponse = $string1.$int1;
    return $reponse;
}

function returnPhrase($nom,$prenom,$age): string{
    $reponse = 'Bonjour '. $prenom . ' ' . $nom . ', tu as ' . $age . ' ans.';
    return $reponse;
}

function returnPhraseAge($age,$genre){
    $reponse = 'Vous êtes ' . (($genre == 'homme') ? 'un homme' : 'une femme') . ' et vous êtes ' . (($age > 18) ? 'majeur.' : 'mineur.');
    return $reponse;
}

function returnSomme($int1 = 1,$int2 = 2,$int3 = 3):int{
    $reponse=$int1+$int2+$int3;
    return $reponse;
}

ob_start();
require_once(__DIR__.'../../component/header.php');?>

<main class="container">
    <h1 class="font-bold text-3xl my-5 text-center"><?=$title?></h1>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>
            
            
            <?php 
            if(returnTrue()){
                echo 'true';
            }else{
                echo'false';
            }
            
            $numeroEx++ ?>
        </p>
    </article>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>
            
            
            <?php 
            echo returnString('hello world');
            
            $numeroEx++ ?>
        </p>
    </article>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>
            
            
            <?php 
            echo return2String('Re Hello', ' World');
            
            $numeroEx++ ?>
        </p>
    </article>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>
            
            
            <?php 
            echo compare($int1,$int2);
            
            $numeroEx++ ?>
        </p>
    </article>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>
            
            
            <?php 
            echo returnStringInt($string1,$int1);
            
            $numeroEx++ ?>
        </p>
    </article>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>
            
            
            <?php 
            echo returnPhrase($nom,$prenom,$age);
            $numeroEx++ ?>
        </p>
    </article>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>
            
            
            <?php 
            echo returnPhraseAge($age,$genre);
            $numeroEx++ ?>
        </p>
    </article>
    <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
        <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
        <p>
            
            
            <?php 
            echo returnSomme($int1,$int2,$age);
            $numeroEx++ ?>
        </p>
    </article>
</main>
<?php $content = ob_get_clean(); 

require(__DIR__.'../../component/layout.php');