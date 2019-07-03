<?php ob_start(); ?>

<h1>Bienvenue !</h1>

<hr>

<ul>
    <li>
        <a href="ajouter-produit.php">Ajout d'un produit</a>
    </li>
    <li>
        <a href="<?= url('clients/add') ?>">Ajout d'un client</a>
    </li>
</ul>

<ul>
    <li>
        <a href="liste-produits.php">Liste des produits</a>
    </li>
    <li>
        <a href="liste-clients.php">Liste des clients</a>
    </li>
</ul>


<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>