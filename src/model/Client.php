<?php

class Client extends Db {

    const TABLE_NAME = "clients";

    protected $id;
    protected $nom;
    protected $email;
    protected $telephone;
    protected $adresse;
    protected $cp;
    protected $ville;


    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    public function setEmail( $email) {
        $this-> email = $email;
        return $this;
    }

    public function setTelephone( $telephone) {
        $this-> telephone = $telephone;
        return $this;
    }

    public function setAdresse( $adresse)
    {
        $this-> adresse = $adresse;
        return $this;
    }

    public function setCp($cp)
    {
        $this->cp = $cp;
        return $this;
    }

    public function setVille($ville)
    {
        $this->ville = $ville;
        return $this;
    }


    public function getId() {
        return $this->id;
    }
    public function getNom() {
        return $this-> nom;
    }
    public function getEmail() {
        return $this-> email;
    }
    public function getTelephone() {
        return $this-> telephone;
    }
    public function getAdresse() {
        return $this-> adresse;
    }
    public function getCp() {
        return $this-> cp;
    }
    public function getVille() {
        return $this-> ville;
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
            "nom"       => $this->getNom(),
            "email"     => $this->getEmail(),
            "telephone" => $this->getTelephone(),
            "adresse"   => $this->getAdresse(),
            "cp"        => $this->getCp(),
            "ville"     => $this->getVille()
        ];
        
        //if ($this->id > 0) return $this->update();
        $nouvelId = Db::dbCreate(self::TABLE_NAME, $data);
        $this->setId($nouvelId);
        return $this;
    }

<<<<<<< HEAD
=======

>>>>>>> master
    public function update()
    {
        if ($this->id > 0) {
            $data = [
<<<<<<< HEAD
                "firstname"  => $this->firstname(),
                "surname"   => $this->surname()
=======
                "id"        => $this->getId(),
                "nom"       => $this->getNom(),
                "email"     => $this->getEmail(),
                "telephone" => $this->getTelephone(),
                "adresse"   => $this->getAdresse(),
                "cp"        => $this->getCp(),
                "ville"     => $this->getVille()
>>>>>>> master
            ];
            Db::dbUpdate(self::TABLE_NAME, $data);
            return $this;
        }
        return;
    }

<<<<<<< HEAD
    public function delete()
    {
        $data = [
            'id' => $this->id(),
=======

    public function delete() {
        $data = [
            'id' => $this->getId(),
>>>>>>> master
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

        $client = new Client;
        $client->setId($element['id']);
        $client->setNom($element['nom']);
        $client->setEmail($element['email']);
        $client->setTelephone($element['telephone']);
        $client->setAdresse($element['adresse']);
        $client->setCp($element['cp']);
        $client->setVille($element['ville']);

        return $client;

    }
}