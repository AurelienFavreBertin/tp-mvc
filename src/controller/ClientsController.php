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

        $this->list();
    }

    public function delete($id) {
        $client = Db::findOne($id);
        $client->delete();

        // On redirige vers la liste des étudiants
        Header('Location: ' . url('clients/list'));
    }

    public function show($id) {

        $client = Client::findOne($id);

        view('clients.show', compact('client'));

    }
}