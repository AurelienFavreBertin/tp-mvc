<?php ob_start(); ?>

<h1 class="text-center">Bienvenue sur TP-MVC !</h1>

<hr>
<div style="background-color:lightgrey; border-radius: 10px; padding:20px;">
    <h3>Ajouter :</h3>
    <hr>
    <ol style="list-style-type: none;">
        <li>
            <a href="<?= url('../clients/add') ?>" class="btn btn-dark">Ajout d'un client</a>
        </li>
        <br />
        <li>
            <a href="<?= url('produits/add') ?>" class="btn btn-dark">Ajout d'un produit</a>
        </li>
    </ol>
</div>

<br />

<div style="background-color:lightgrey; border-radius: 10px; padding:20px;">
    <h3>Visualiser :</h3>
    <hr>
    <ol style="list-style-type: none;">
        <li>
            <a href="<?= url('clients/list') ?>" class="btn btn-dark">Liste des clients</a>
        </li>
        <br />
        <li>
            <a href="<?= url('produits/list') ?>" class="btn btn-dark">Liste des produits</a>
        </li>
    </ol>
</div>

<br />

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>