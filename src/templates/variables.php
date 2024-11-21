<?php
ob_start();
require_once(__DIR__.'../../component/header.php');?>

<main class="text-center border shadow-2xl mt-5 w-10/12 mx-auto">
    <h1 class="font-bold text-3xl my-5">Les variables</h1>
    <article class="text-center border shadow-2xl mt-5 w-10/12 mx-auto">
        coucou
    </article>
</main>
<?php $content = ob_get_clean(); 

require(__DIR__.'../../component/layout.php');