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

        $client = new clients;
        $client->setField1($_POST['nom']);
        $client->setField2($_POST['email']);
        $client->setField3($_POST['telephone']);
        $client->setPhoto($_FILES['adresse']);

        $client->save();
    }
}