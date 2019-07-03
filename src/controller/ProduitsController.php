<?php

class ProduitsController {
    
    public function add() 
    {
        view('produits.add');
    }
    public function list()
    {
        view('produits.list');
    }

    public function save()
    {

        $flight = new Example;
        $flight->setField1($_POST['field1']);
        $flight->setField2($_POST['field2']);
        $flight->setField3($_POST['field3']);
        $flight->setField4($_POST['date'], $_POST['time']);
        $flight->setPhoto($_FILES['photo']);

        $flight->save();
    }
}