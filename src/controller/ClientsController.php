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
        $client->setField1($_POST['nom']);
        $client->setField2($_POST['email']);
        $client->setField3($_POST['telephone']);
        $client->setField4($_FILES['adresse']);

        $client->save();
    }
}