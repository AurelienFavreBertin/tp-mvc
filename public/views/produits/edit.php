<?php ob_start(); ?>

<a href="<?= url('') ?>" class="btn btn-sm btn-secondary" style="margin-bottom:30px;">
    < Retour à la page des produits</a> <div class="box">
        <img class="icone left" src="<?= img_url('update_produit.png') ?>" alt="Ajouter produit" />
        <h2>Modifier un produit</h2>

        <hr>

        <form style="padding:10px;" class="form" method="post" action="<?= url('produits/ ' . $produit->getId() . '/edit') ?>" enctype="multipart/form-data">

            <div class="form-group">
                <input class="form-control" type="text" name="nom" value="<?= $produit->getNom() ?>" id="nom">
            </div>

            <div class="form-group">
                <input class="form-control" type="text" name="description" value="<?= $produit->getDescription() ?>" id="description">
            </div>

            <div class="form-group">
                <input class="form-control" type="number" name="prix" value="<?= $produit->getPrix() ?>" id="prix">
            </div>

            <div class="form-group">
                <input class="form-control" type="number" name="stock" value="<?= $produit->getStock() ?>" id="stock">
            </div>

            <button class="btn btn-success float-right" type="submit">Modifier</button>
        </form><br />
        </div>

        <?php $content = ob_get_clean() ?>
        <?php view('template', compact('content')); ?>