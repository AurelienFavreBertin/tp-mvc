<?php ob_start(); ?>


<a href="<?= url('') ?>" class="btn btn-sm btn-secondary" style="margin-bottom:30px;">
    < Retour à la page d'accueil</a> <div style="background-color:lightgrey; border-radius: 10px; padding:20px;">

        <table style="margin-top:20px;" class="table">

            <h2>Panier</h2>

            <tr>
                <th>#id</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Stock</th>
                <th>Photo</th>
            </tr>

            <?php foreach ($produits as $produit) : ?>

                <tr>
                    <td><?= $produit['id'] ?></td>
                    <td><?= $produit['nom'] ?></td>
                    <td><?= $produit['description'] ?></td>
                    <td><?= $produit['prix'] ?></td>
                    <td><?= $produit['stock'] ?></td>
                    <td><img src="<?= uploads_url($produit['photo']) ?>" height="100"></td>
                </tr>

            <?php endforeach; ?>

        </table>

        </div>

        <?php $content = ob_get_clean() ?>
        <?php view('template', compact('content')); ?>