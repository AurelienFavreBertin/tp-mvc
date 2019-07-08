<?php ob_start(); ?>

<a href="<?= url('') ?>" class="btn btn-sm btn-secondary" style="margin-bottom:30px;">
    < Retour à la page d'accueil</a>
    
    <div class="box">
        <img class="icone left" src="<?= img_url('add_produit.png') ?>" alt="Ajouter produit" />
        <h2>Ajouter un produit au panier</h2>

        <hr>

        <form style="padding:10px;" class="form" method="post" action="<?= url('paniers/add') ?>" >

            <input type="hidden" name="client_id" value="<?= $id ?>">
            
            <div class="form-group">
                <input class="form-control" type="number" name="produit_id" placeholder="produit_id" id="produit_id">
            </div>

            <div class="form-group">
                <input class="form-control" type="number" name="quantite" placeholder="quantite" id="quantite">
            </div>


            <button class="btn btn-success float-right" type="submit">Ajouter</button>
        </form><br />
        </div>

        <?php $content = ob_get_clean() ?>
        <?php view('template', compact('content') ); ?>