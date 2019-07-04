<?php

class ClientsController {
    
    public function add() 
    {
        view('clients.add');
    }
    public function list()
    {
<<<<<<< Updated upstream:src/controller/ProduitsController.php
        $produits = Produit::findAll();
        view('produits.list', compact('produits'));
=======
        view('clients.list');
>>>>>>> Stashed changes:src/controller/ProduitsController.1.php
    }

    public function save()
    {

<<<<<<< Updated upstream:src/controller/ProduitsController.php
        $produit = new Produit;
        $produit->setNom($_POST['nom']);
        $produit->setDescription($_POST['description']);
        $produit->setPrix($_POST['prix']);
        $produit->setStock($_POST['stock']);
        $produit->setPhoto($_FILES['photo']);

        $produit->save();

        $this->list();
=======
        $client = new Produit;
        $client->setNom($_POST['nom']);
        $client->setEmail($_POST['photo']);
        $client->setTelephone($_POST['description']);
        $client->setAdresse($_POST['prix']);
        $client->setAdresse($_POST['stock']);

        $client->save();

        view('clients.list');
>>>>>>> Stashed changes:src/controller/ProduitsController.1.php
    }
}