<?php ob_start(); ?>

<div class="left">
    <img class=" logo" src="<?= img_url('logo.png') ?>" alt="Logo">
</div>
<h1 class="text-left titre">Petit Génie</h1>
<em>Le panneau de configuration</em>

<hr>
<div class="row">
    <div class="col-12 col-sm-6">
        <div class="box">
            <h3>Ajouter :</h3>
            <hr>
            <ol>
                <li>
                    <img class="icone" src="<?= img_url('add_clients.png') ?>" alt="Ajouter client" />
                    <a href="<?= url('clients/add') ?>" class="btn btn-dark">Ajouter un client</a>
                </li>
                <br />
                <li>
                    <img class="icone" src="<?= img_url('add_produit.png') ?>" alt="Ajouter produit" />
                    <a href="<?= url('produits/add') ?>" class="btn btn-dark">Ajouter un produit</a>
                </li>
            </ol>
        </div>
    </div>

    <div class="col-12 col-sm-6">
        <div class="box">
            <h3>Visualiser :</h3>
            <hr>
            <ol>
                <li>
                    <img class="icone" src="<?= img_url('lister_clients.png') ?>" alt="Lister clients" />
                    <a href="<?= url('clients/list') ?>" class="btn btn-dark">Liste des clients</a>
                </li>
                <br />
                <li>
                    <img class="icone" src="<?= img_url('lister_produits.png') ?>" alt="Lister produits" />
                    <a href="<?= url('produits/list') ?>" class="btn btn-dark">Liste des produits</a>
                </li>
            </ol>
        </div>
    </div>
</div>


<br />



<br />

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>