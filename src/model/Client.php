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

    public static function findAll() {
        $data = Db::dbFind(self::TABLE_NAME);
        return $data;
    }
}