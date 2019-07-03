<?php ob_start(); ?>

<h1>Bienvenue !</h1>

<hr>

<ul>
    <li>
        <a href="listeBiens.php">Ajout d'un produit</a>
    </li>
    <li>
        <a href="listeBiens.php">Ajout d'un client</a>
    </li>
</ul>

<ul>
    <li>
        <a href="listeBiens.php">Liste des produits</a>
    </li>
    <li>
        <a href="listeBiens.php">Liste des clients</a>
    </li>
</ul>


<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>