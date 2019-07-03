<?php

class ClientsController {
    
    public function add() 
    {
        view('clients.add');
    }
    public function list()
    {
        view('clients.list');
    }

    public function save()
    {

        $client = new Client;
        $client->setNom($_POST['nom']);
        $client->setEmail($_POST['email']);
        $client->setTelephone($_POST['telephone']);
        $client->setAdresse($_POST['adresse']);

        $client->save();

        view('clients.list');
    }
}