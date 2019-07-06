<?php

class PaniersController
{

    public function add()
    {
        $clientPanier = ClientPanier::findAll();
        view('paniers.add', compact('panier'));
    }


}
