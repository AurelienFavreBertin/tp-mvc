<?php ob_start(); ?>

<h2>Liste des clients</h2>

<?php $content = ob_get_clean() ?>
<?php view('template', compact('content')); ?>