<?php ob_start(); ?>

<h1 class="text-center">Bienvenue !</h1>

<hr>

<ul>
    <li>
        <a href="#.php" class="btn btn-sm btn-secondary">Ajout d'un client</a>
    </li>
    <br>
    <li>
        <a href="<?= url('clients/add') ?>">Ajout d'un client</a>
    </li>
</ul>
<br><br>
<ul>
    <li>
        <a href="#.php" class="btn btn-sm btn-secondary">Liste des clients</a>
    </li>
    <br>
    <li>
        <a href="#.php" class="btn btn-sm btn-secondary">Liste des produits</a>
    </li>
</ul>


<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>