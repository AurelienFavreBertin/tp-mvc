<?php ob_start(); ?>

<a href="<?= url('clients/list') ?>" class="btn btn-sm btn-secondary" style="margin-bottom:30px;">
    < Retour à la page des clients</a> 
    
    <div class="box">
        <img class="icone left" src="<?= img_url('update_client.png') ?>" alt="Modifier client" />
        <h2>Modifier un client</h2>

        <hr>

        <form style="padding:10px;" class="form" method="post" action="<?= url('clients/ '. $client->getId() .'/edit') ?>" enctype="multipart/form-data">

            <div class="form-group">
                <input class="form-control" type="text" name="nom" value="<?= $client->getNom() ?>" id="">
            </div>

            <div class="form-group">
                <input class="form-control" type="text" name="email" value="<?= $client->getEmail() ?>" id="">
            </div>

            <div class="form-group">
                <input class="form-control" type="number" name="telephone" value="<?= $client->getTelephone() ?>" id="">
            </div>

            <div class="form-group">
                <input class="form-control" type="text" name="adresse" value="<?= $client->getAdresse() ?>" id="">
            </div>

            <div class="form-group">
                <input class="form-control" type="text" name="cp" value="<?= $client->getCp() ?>" id="">
            </div>

            <div class="form-group">
                <input class="form-control" type="text" name="ville" value="<?= $client->getVille() ?>" id="">
            </div>

            <button class="btn btn-success float-right" type="submit">Modifier</button>
        </form><br />
        </div>

        <?php $content = ob_get_clean() ?>
        <?php view('template', compact('content')); ?>