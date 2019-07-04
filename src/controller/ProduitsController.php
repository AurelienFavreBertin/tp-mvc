<?php

class ProduitsController
{

    public function add()
    {
        view('produits.add');
    }
    public function list()
    {
        $produits = Produit::findAll();
        view('produits.list', compact('produits'));
    }

    public function save()
    {

        $produit = new Produit;
        $produit->setNom($_POST['nom']);
        $produit->setDescription($_POST['description']);
        $produit->setPrix($_POST['prix']);
        $produit->setStock($_POST['stock']);
        $produit->setPhoto($_FILES['photo']);

        $produit->save();

        $this->list();
    }
}
