<?php
$title = 'Accueil';
ob_start();
require_once(__DIR__.'../../component/header.php');?>

<main class="text-center border shadow-2xl mt-5 w-10/12 mx-auto">
    <h1 class="font-bold text-3xl my-5">Les exercices de base du PHP</h1>
    <p>Voici la page d'accueil des exercices sur les bases du PHP</p>
    <p>Bonne visite à toi <?php echo $_SESSION['name']?></p>
</main>
<?php $content = ob_get_clean(); 

require(__DIR__.'../../component/layout.php');