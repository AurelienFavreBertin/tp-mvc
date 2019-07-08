<?php

class Panier extends Db {

    const TABLE_NAME = "panier";

    protected $id;
    protected $client_id;
    protected $produit_id;
    protected $quantite;


    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setClient_id($client_id) {
        $this->client_id = $client_id;
        return $this;
    }

    public function setProduit_id( $produit_id) {
        $this-> produit_id = $produit_id;
        return $this;
    }

    public function setQuantite( $quantite) {
        $this-> quantite = $quantite;
        return $this;
    }



    public function getId() {
        return $this->id;
    }
    public function getClient_id() {
        return $this-> client_id;
    }
    public function getProduit_id() {
        return $this-> produit_id;
    }
    public function getQuantite() {
        return $this-> quantite;
    }

    public function getPanier() {

        $bdd = $this->getDb();

        $req = 'SELECT *
                FROM panier
                INNER JOIN produits
                    ON panier.produit_id = produits.id
                WHERE panier.client_id = ' . $this->getId();

        $res = $bdd->query($req);
        $produits = $res->fetchAll(PDO::FETCH_ASSOC);

        return $produits;

    }

    public function getTotal() {
        
        $panier = $this->getPanier();

        $total = 0;

        $result = array_map(function($produit) use (&$total) {

            $total += $produit['prix'] * $produit['quantite'];

        }, $panier);

        return $total;
    }

    public function save()
    {
        $data = [
            "client_id"      => $this->getClient_id(),
            "produit_id"     => $this->getProduit_id(),
            "quantite"       => $this->getQuantite()
        ];
        
        //if ($this->id > 0) return $this->update();
        $nouvelId = Db::dbCreate(self::TABLE_NAME, $data);
        $this->setId($nouvelId);
        return $this;
    }


    public function update()
    {
        if ($this->id > 0) {
            $data = [
                "id"             => $this->getId(),
                "client_id"      => $this->getClient_id(),
                "produit_id"     => $this->getProduit_id(),
                "quantite"       => $this->getQuantite()
            ];
            Db::dbUpdate(self::TABLE_NAME, $data);
            return $this;
        }
        return;
    }


    public function delete() {
        $data = [
            'id' => $this->getId(),
        ];

        Db::dbDelete(self::TABLE_NAME, $data);
        return;
    }

    public static function findAll() {
        $data = Db::dbFind(self::TABLE_NAME);
        return $data;
    }

    public static function find(array $request)
    {
        $data = Db::dbFind(self::TABLE_NAME, $request);
        return $data;
    }

    public static function findOne(int $id) {
        $request = [
            ['id', '=', $id]
        ];
        $element = Db::dbFind(self::TABLE_NAME, $request);
        if (count($element) > 0) $element = $element[0];
        else return;

        $panierClient = new PanierClient;
        $panierClient->setId($element['id']);
        $panierClient->setClient_id($element['client_id']);
        $panierClient->setProduit_id($element['produit_id']);
        $panierClient->setQuantite($element['quantite']);

        return $panierClient;

    }
}