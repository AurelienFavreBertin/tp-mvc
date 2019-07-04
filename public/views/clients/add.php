<?php ob_start(); ?>

<a href="<?= url('') ?>" class="btn btn-sm btn-secondary" style="margin-bottom:30px;">
    < Retour à la page d'accueil</a> <div style="background-color:lightgrey; border-radius: 10px; padding:20px;">

        <h2>Ajouter un client</h2>

        <hr>

        <form style="padding:10px;" class="form" method="post" action="<?= url('clients/add') ?>" enctype="multipart/form-data">

            <div class="form-group">
                <input class="form-control" type="text" name="nom" placeholder="Nom" id="">
            </div>

            <div class="form-group">
                <input class="form-control" type="text" name="email" placeholder="Email" id="">
            </div>

            <div class="form-group">
                <input class="form-control" type="number" name="telephone" placeholder="Telephone" id="">
            </div>

            <div class="form-group">
                <input class="form-control" type="text" name="adresse" placeholder="Adresse" id="">
            </div>

            <div class="form-group">
                <input class="form-control" type="text" name="cp" placeholder="Code Postal" id="">
            </div>

            <div class="form-group">
                <input class="form-control" type="text" name="ville" placeholder="Ville" id="">
            </div>

            <button class="btn btn-success float-right" type="submit">Ajouter</button>
        </form><br />
        </div>

        <?php $content = ob_get_clean() ?>
        <?php view('template', compact('content')); ?>