<?php

class ClientsController {
    
    public function add() 
    {
        view('clients.add');
    }
    public function list()
    {
        $clients = Client::findAll();
        view('clients.list', compact('clients'));
    }

    public function save()
    {

        $client = new Client;
        $client->setNom($_POST['nom']);
        $client->setEmail($_POST['email']);
        $client->setTelephone($_POST['telephone']);
        $client->setAdresse($_POST['adresse']);
        $client->setCp($_POST['cp']);
        $client->setVille($_POST['ville']);

        $client->save();

<<<<<<< HEAD

        $this->list();
    }

    public function delete( $id) {
        $client = Client::findOne($id);
        $client->delete();

        // On redirige vers la liste des clients
        view('clients.list', compact('client'));
=======
        redirectTo('clients/list');
    }



    public function edit($id) {
        $client = Client::findOne($id);

        view('clients.edit', compact('client'));
    }

    public function update($id)
    {
        $client = Client::findOne($id);
        $client->setNom($_POST['nom']);
        $client->setEmail($_POST['email']);
        $client->setTelephone($_POST['telephone']);
        $client->setAdresse($_POST['adresse']);
        $client->setCp($_POST['cp']);
        $client->setVille($_POST['ville']);
        $client->update();

        // On redirige vers la page de l'étudiant
        redirectTo('clients/' . $client->getId());
    }


    public function delete($id) {
        $client = Client::findOne($id);
        $client->delete();

        // On redirige vers la liste des étudiants
        redirectTo('clients/list');

>>>>>>> master
    }

    public function show($id) {

        $client = Client::findOne($id);

        view('clients.show', compact('client'));

    }
}