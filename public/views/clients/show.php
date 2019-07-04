<?php ob_start(); ?>


<a href="<?= url('') ?>" class="btn btn-sm btn-secondary" style="margin-bottom:30px;">
    < Retour à la page d'accueil</a> <div style="background-color:lightgrey; border-radius: 10px; padding:20px;">

        <table style="margin-top:20px;" class="table">


        <div class="row">
            <div class="col-4">
                Nom : <?= $client->getNom() ?>
                Email:<?= $client->getEmail() ?>
                Tel:<?= $client->getTelephone() ?>
                Addresse : <?= $client->getAdresse() ?>
            </div>
            <div class="col-8"></div>
        </div>

            <h2>Panier</h2>

            <tr>
                <th>#id</th>
                <th>client_id</th>
                <th>produit_id</th>
                <th>quantite</th>
            </tr>

            <?php foreach ($client->getPanier() as $panier) :?>

                <tr>
                    <td><?= $panier['id'] ?></td>
                    <td><?= $panier['client_id'] ?></td>
                    <td><?= $panier['produit_id'] ?></td>
                    <td><?= $panier['quantite'] ?></td>
                </tr>

            <?php endforeach; ?>

        </table>

        </div>

        <?php $content = ob_get_clean() ?>
        <?php view('template', compact('content')); ?>