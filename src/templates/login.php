<?php
$title = 'Variables superglobales';


ob_start();
require_once(__DIR__.'../../component/header.php');?>
<main class="container bg-slate-400 h-3/4 w-10/12 mx-auto pt-5 rounded">
    <form action="./src/controller/loginController.php" method="POST" name='monlogin' class="container w-2/4 mx-auto text-2xl mt-10">
            <!-- label et input --> 
            <div class="mb-4">
                <label for="nom" class="form-label"> nom </label>
                <input type="text" name="nom" class="form-control" placeholder="nom">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary border border-slate-100 p-1 rounded">Envoyer</button>
        </form>
<?php if(isset($_SESSION)){
        var_dump($_SESSION);
    }?>
</main>

    <?php 
    
    $content = ob_get_clean(); 

require(__DIR__.'../../component/layout.php');