<?php ob_start(); ?>


<a href="<?= url('produits/list') ?>" class="btn btn-sm btn-secondary" style="margin-bottom:30px;">
    < Retour à la liste des produits</a> <div class="box">

        <table style="margin-top:20px;" class="table">


            <div class="row">
                <div class="col-12">
                    <b>Nom:</b> <?= $produit->getNom() ?> <br />
                    <b>Description:</b> <?= $produit->getDescription() ?> <br />
                    <b>Prix:</b> <?= $produit->getPrix() ?> <br />
                    <b>Stock:</b> <?= $produit->getStock() ?> <br />
                    <b>Photo:</b> <img src="<?= uploads_url($produit->getPhoto()) ?>" height="100"> <br />
                </div>
            </div>

        </table>

        </div>

        <?php $content = ob_get_clean() ?>
        <?php view('template', compact('content')); ?>