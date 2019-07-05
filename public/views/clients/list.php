<?php ob_start(); ?>


<a href="<?= url('') ?>" class="btn btn-sm btn-secondary" style="margin-bottom:30px;">
    < Retour à la page d'accueil</a> <div style="background-color:lightgrey; border-radius: 10px; padding:20px;">

        <table style="margin-top:20px;" class="table">

            <h2>Liste des clients</h2>

            <tr>
                <th>Delete</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Adresse</th>
                <th>Code Postal</th>
                <th>Ville</th>
            </tr>



            <?php foreach ($clients as $client) : ?>

                <tr>
                    <td><a href="<?= url('clients/' . $client['id'] . '/delete') ?>"><img style="width:40px; height:40px; margin-right:10px;" src="../img/delete.png" alt="delete" /></a></td>
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