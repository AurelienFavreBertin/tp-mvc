<?php

class PaniersController
{

    public function add($id)
    {
        
        view('paniers.add', compact('id'));
    }

    public function save()
    {

        $panierClient = new Panier;
        $panierClient->setClient_id($_POST['client_id']);
        $panierClient->setProduit_id($_POST['produit_id']);
        $panierClient->setQuantite($_POST['quantite']);

        $panierClient->save();

        redirectTo('clients/list');
    }


}
