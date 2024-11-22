<?php

$title = 'Variables superglobales';
$numeroEx=1;

ob_start();
require_once(__DIR__.'../../component/header.php');?>
<main class="container">
    <h1 class="font-bold text-3xl my-5 text-center"><?=$title?></h1>
        <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
            <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
            <p>
                
                
                <?php 
                echo 'User Agent :'.$_SERVER['HTTP_USER_AGENT']. '</br> adresse IP :' . $_SERVER['REMOTE_ADDR'] . '</br> nom du serveur :' . $_SERVER['SERVER_NAME'];
                
                $numeroEx++ ?>
            </p>
        </article>
        <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
            <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
            <p>
                
                
                <?php 
                echo 'Monsieur ' . $_SESSION['nom']. ' ' . $_SESSION['prenom'] . ' a ' . $_SESSION['age'] . ' ans.';
                
                $numeroEx++ ?>
            </p>
        </article>
        <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
            <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
            <p>
                <form action="/src/controller/controller_exo3.php" class="container" method="post">
                    <div class="mb-4">
                        <label for="animal" class="row">Animal préféré</label>
                        <input type="text" name="animal" id="animal" class="border">
                    </div>
                    <div class="mb-4">
                        <label for="couleur">Couleur préférée</label>
                        <input type="text" name="couleur" id="couleur" class="border">
                    </div>
                    <button type="submit" class="border p-1 bg-slate-400 rounded">Envoyer</button>
                </form>
                
                <?php
                
                $numeroEx++ ?>
            </p>
        </article>
        <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
            <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
            <p>
                
                
                <?php
                
                (isset($_COOKIE['animal_pref']) && isset($_COOKIE['couleur_pref']))?
                    $reponse = 'votre animal préféré est : ' . $_COOKIE['animal_pref'] . '.</br>Votre couleur préférée est :' . $_COOKIE['couleur_pref'] : $reponse='vous n\'avez pas rempli le formulaire';
                echo $reponse;
                $numeroEx++ ?>
            </p>
        </article>
        <article class="border shadow-2xl mt-5 w-10/12 mx-auto">
            <h2 class="text-2xl mb-2">exercice <?=$numeroEx?></h2>
            <p>
                <h3>Editer vos préférences</h3>
                <form action="/src/controller/controller_exo3.php" class="container" method="post">
                    <div class="mb-4">
                        <label for="animal" class="row">Animal préféré</label>
                        <input type="text" name="animal" id="animal" class="border">
                    </div>
                    <div class="mb-4">
                        <label for="couleur">Couleur préférée</label>
                        <input type="text" name="couleur" id="couleur" class="border">
                    </div>
                    <button type="submit" class="border p-1 bg-slate-400 rounded">Envoyer</button>
                </form>
                
                <?php
                
                $numeroEx++ ?>
            </p>
        </article>
</main>




<?php $content = ob_get_clean(); 

require(__DIR__.'../../component/layout.php');