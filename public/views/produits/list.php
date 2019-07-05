<?php ob_start(); ?>


<a href="<?= url('') ?>" class="btn btn-sm btn-secondary" style="margin-bottom:30px;">
    < Retour à la page d'accueil</a> <div class="box">

        <table style="margin-top:20px;" class="table">
            <img class="icone left" src="<?= img_url('lister_produits.png') ?>" alt="Lister produits" />
            <h2>Liste des produits</h2>

            <tr>
                <th>Supprimer</th>
                <th>Modifier</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Stock</th>
                <th>Photo</th>
            </tr>



            <?php foreach ($produits as $produit) : ?>

                <tr>
                    <td><a href="<?= url('produits/' . $produit['id'] . '/delete') ?>"><img class="icone_cli" src="<?= img_url('delete_produit.png') ?>" alt="delete" /></a></td>
                    <td><a href="<?= url('produits/' . $produit['id'] . '/edit') ?>"><img class="icone_cli" src="<?= img_url('update_produit.png') ?>" alt="update" /></a></td>
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