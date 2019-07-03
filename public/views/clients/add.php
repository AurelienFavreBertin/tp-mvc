<?php ob_start(); ?>

<h2>Add clients</h2>

<form class="form" method="post" action="<?= url('clients-add') ?>" enctype="multipart/form-data">
    <input class="form-control" type="text" name="nom" placeholder="nom" id="">
    <input class="form-control" type="text" name="email" placeholder="email" id="">
    <input class="form-control" type="number" name="telephone" placeholder="telephone" id="">
    <input class="form-control" type="text" name="adresse" placeholder="adresse" id="">
    <input type="submit" value="Envoyer">
</form>

<?php $content = ob_get_clean() ?>
<?php view('template', compact('content')); ?>