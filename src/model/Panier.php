<?php

class Panier extends Db
{

    const TABLE_NAME = "panier";

    protected $id;
    protected $client_id;
    protected $produit_id;
    protected $quantite;


    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setClient_id( $client_id)
    {
        $this-> client_id = $client_id;
        return $this;
    }

    public function setProduit_id( $produit_id)
    {
        $this-> produit_id = $produit_id;
        return $this;
    }

    public function setQuantite( $quantite)
    {
        $this-> quantite = $quantite;
        return $this;
    }



    public function getClient_id()
    {
        return $this-> client_id;
    }
    public function getProduit_id()
    {
        return $this-> produit_id;
    }
    public function getQuantite()
    {
        return $this-> quantite;
    }



    public function save()
    {
        $data = [
            "client_id"         => $this-> getClient_id(),
            "produit_id"        => $this-> getProduit_id(),
            "quantite"          => $this-> getQuantite()
        ];

        //if ($this->id > 0) return $this->update();
        $nouvelId = Db::dbCreate(self::TABLE_NAME, $data);
        $this->setId($nouvelId);
        return $this;
    }

    public static function findAll()
    {
        $data = Db::dbFind(self::TABLE_NAME);
        return $data;
    }
}
