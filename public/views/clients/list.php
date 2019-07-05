<?php ob_start(); ?>


<a href="<?= url('') ?>" class="btn btn-sm btn-secondary" style="margin-bottom:30px;">
    < Retour à la page d'accueil</a> <div class="box">

        <table style="margin-top:20px;" class="table">
            <img class="icone left" src="<?= img_url('lister_clients.png') ?>" alt="Lister clients" />
            <h2>Liste des clients</h2>

            <tr>
                <th>Supprimer</th>
                <th>Modifier</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Adresse</th>
                <th>Code Postal</th>
                <th>Ville</th>
            </tr>

            <?php foreach ($clients as $client) : ?>

                <tr>
                    <td><a href="<?= url('clients/' . $client['id'] . '/delete') ?>"><img class="icone_cli" src="<?= img_url('delete_client.png') ?>" alt="delete" /></a></td>
                    <td><a href="<?= url('clients/' . $client['id'] . '/edit') ?>"><img class="icone_cli" src="<?= img_url('update_client.png') ?>" alt="update" /></a></td>
                    <td><a href="<?= url('clients/' . $client['id']) ?>"><?= $client['nom'] ?></a></td>
                    <td><?= $client['email'] ?></td>
                    <td>0<?= $client['telephone'] ?></td>
                    <td><?= $client['adresse'] ?></td>
                    <td><?= $client['cp'] ?></td>
                    <td><?= $client['ville'] ?></td>
                </tr>

            <?php endforeach; ?>

        </table>

        </div>

        <?php $content = ob_get_clean() ?>
        <?php view('template', compact('content')); ?>