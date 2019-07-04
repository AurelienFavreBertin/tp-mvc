<?php ob_start(); ?>


<a href="<?= url('clients/list') ?>" class="btn btn-sm btn-secondary" style="margin-bottom:30px;">
    < Retour à la page d'accueil</a> <div style="background-color:lightgrey; border-radius: 10px; padding:20px;">

        <table style="margin-top:20px;" class="table">


            <div class="row">
                <div class="col-4">
                    <b>Nom:</b> <?= $client->getNom() ?> <br />
                    <b>Email:</b> <?= $client->getEmail() ?> <br />
                    <b>Tél:</b> 0<?= $client->getTelephone() ?> <br />
                    <b>Adresse:</b> <?= $client->getAdresse() ?> <br />
                    <b>Code postal:</b> <?= $client->getCp() ?> <br />
                    <b>Ville:</b> <?= $client->getVille() ?> <br />
                </div>
                <div class="col-8">

                    <tr>
                        <th>Photo</th>
                        <th>#id</th>
                        <th>Client</th>
                        <th>Produit</th>
                        <th>Quantité</th>
                        <th>Prix</th>
                    </tr>

                    <?php foreach ($client->getPanier() as $panier) : ?>

                        <tr>
                            <td><img src="<?= uploads_url($panier['photo']) ?>" height="100"></td>
                            <td><?= $panier['id'] ?></td>
                            <td><?= $client->getNom() ?></td>
                            <td><?= $panier['nom'] ?></td>
                            <td><?= $panier['quantite'] ?></td>
                            <td><?= $panier['prix'] ?></td>
                        </tr>

                    <?php endforeach; ?>

                </div>
            </div>

        </table>

        <hr>

        <div style="float:right; color:#0056b3;">
            <h2>Total: <?= $client->getTotal(); ?> €</h2>
        </div>

        <br /><br />
        </div>

        <?php $content = ob_get_clean() ?>
        <?php view('template', compact('content')); ?>