<?php ob_start(); ?>

<h1>Bienvenue chez Petit Génie !</h1>

<div class="col-4">
    <a href="listeBiens.php" class="btn btn-sm btn-secondary">
        Liste des produits
    </a>
</div>

<div class="col-4">
    <a href="listeBiens.php" class="btn btn-sm btn-secondary">
        Liste des clients
    </a>
</div>
<div class="col-4">
    <a href="listeBiens.php" class="btn btn-sm btn-secondary">
        Ajout d'un produit
    </a>
</div>
<div class="col-4">
    <a href="listeBiens.php" class="btn btn-sm btn-secondary">
        Ajout d'un client
    </a>
</div>


<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>