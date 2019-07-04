<?php ob_start(); ?>

<a href="<?= url('') ?>" class="btn btn-sm btn-secondary" style="margin-bottom:30px;">
    < Retour à la page d'accueil</a>
    
    <div style="background-color:lightgrey; border-radius: 10px; padding:20px;">

        <h2>Ajouter un produit</h2>

        <hr>

        <form style="padding:10px;" class="form" method="post" action="<?= url('produits/add') ?>" enctype="multipart/form-data">

            <div class="form-group">
                <input class="form-control" type="text" name="nom" placeholder="nom" id="nom">
            </div>

            <div class="form-group">
                <input class="form-control" type="text" name="description" placeholder="description" id="description">
            </div>

            <div class="form-group">
                <input class="form-control" type="number" name="prix" placeholder="prix" id="prix">
            </div>

            <div class="form-group">
                <input class="form-control" type="number" name="stock" placeholder="stock" id="stock">
            </div>

            <div class="form-group">
                <label for="#formField1">Ajouter une photo:</label><br />
                <input type="file" name="photo">
            </div>

            <button class="btn btn-success float-right" type="submit">Ajouter</button>
        </form><br />
        </div>

        <?php $content = ob_get_clean() ?>
        <?php view('template', compact('content')); ?>