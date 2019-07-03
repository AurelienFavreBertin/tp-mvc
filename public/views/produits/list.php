<?php ob_start(); ?>

<h2>Liste des produits</h2>

<?php $content = ob_get_clean() ?>
<?php view('template', compact('content')); ?>