<?php

class PaniersController
{

    public function list()
    {
        $panier = Panier::findAll();
        view('panier.panier', compact('panier'));
    }


}
