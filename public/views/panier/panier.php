<?php ob_start(); ?>


<a href="<?= url('') ?>" class="btn btn-sm btn-secondary" style="margin-bottom:30px;">
    < Retour à la page d'accueil</a> <div style="background-color:lightgrey; border-radius: 10px; padding:20px;">

        <table style="margin-top:20px;" class="table">

            <h2>Panier</h2>

            <tr>
                <th>#id</th>
                <th>client_id</th>
                <th>produit_id</th>
                <th>quantite</th>
            </tr>

            <?php foreach ($panier as $p) : ?>

                <tr>
                    <td><?= $p['id'] ?></td>
                    <td><?= $p['client_id'] ?></td>
                    <td><?= $p['produit_id'] ?></td>
                    <td><?= $p['quantite'] ?></td>
                </tr>

            <?php endforeach; ?>

        </table>

        </div>

        <?php $content = ob_get_clean() ?>
        <?php view('template', compact('content')); ?>