<?php ob_start(); ?>

<div style="float:left;"><img style="width:62px; height:62px; margin-right:20px;" src="../img/logo.png" alt="Logo"></div>
<h1 class="text-left" style="margin-bottom:-5px;">Petit Génie</h1>
<em style="color:#bfbfbf;">Panneau de configuration</em>

<hr>
<div class="row">
    <div class="col-12 col-sm-6">
        <div style="border:5px solid #66d9ff; border-radius: 10px; padding:20px; margin-bottom:20px; background:linear-gradient(#e6f7ff, #fff);">
            <h3>Ajouter :</h3>
            <hr>
            <ol style="list-style-type: none; padding:0;">
                <li>
                    <img style="width:40px; height:40px; margin-right:10px;" src="../img/add_clients.png" alt="Ajouter client" />
                    <a href="<?= url('../clients/add') ?>" class="btn btn-dark">Ajouter un client</a>
                </li>
                <br />
                <li>
                    <img style="width:40px; height:40px; margin-right:10px;" src="../img/add_produit.png" alt="Ajouter produit" />
                    <a href="<?= url('produits/add') ?>" class="btn btn-dark">Ajouter un produit</a>
                </li>
            </ol>
        </div>
    </div>

    <div class="col-12 col-sm-6">
        <div style="border:5px solid #66d9ff; border-radius: 10px; padding:20px; background:linear-gradient(#e6f7ff, #fff);">
            <h3>Visualiser :</h3>
            <hr>
            <ol style="list-style-type: none; padding:0;">
                <li>
                    <img style="width:40px; height:40px; margin-right:10px;" src="../img/lister_clients.png" alt="Lister clients" />
                    <a href="<?= url('clients/list') ?>" class="btn btn-dark">Liste des clients</a>
                </li>
                <br />
                <li>
                    <img style="width:40px; height:40px; margin-right:10px;" src="../img/lister_produits.png" alt="Lister produits" />
                    <a href="<?= url('produits/list') ?>" class="btn btn-dark">Liste des produits</a>
                </li>
            </ol>
        </div>
    </div>
</div>


<br />



<br />

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>