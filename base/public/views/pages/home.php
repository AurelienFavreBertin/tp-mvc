<?php ob_start(); ?>

<h1>Bienvenue !</h1>

<hr>

<ul>
    <li>Liste des produits</li>
    <li>Liste des clients</li>
</ul>

<ul>
    <li>Ajouter un produit</li>
    <li>Ajouter un client</li>
</ul>


<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>