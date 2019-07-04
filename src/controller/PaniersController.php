<?php

class PaniersController
{

    public function list()
    {
        $produits = Produit::findAll();
        view('panier.panier', compact('panier'));
    }


}
