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


    public function edit($id)
    {
        $produit = Produit::findOne($id);

        view('produits.edit', compact('produit'));
    }

    public function update($id)
    {
        $produit = Produit::findOne($id);
        $produit->setNom($_POST['nom']);
        $produit->setDescription($_POST['description']);
        $produit->setPrix($_POST['prix']);
        $produit->setStock($_POST['stock']);
        $produit->setPhoto($_POST['photo']);
        $produit->update();

        // On redirige vers la page
        redirectTo('produits/' . $produit->getId());
    }


    public function delete($id)
    {
        $produit = Produit::findOne($id);
        $produit->delete();

        // On redirige vers la liste
        redirectTo('produits/list');
    }

    public function show($id) {

        $produit = Produit::findOne($id);

        view('produits.show', compact('produit'));
    }

}
