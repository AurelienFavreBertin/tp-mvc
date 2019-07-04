<?php

<<<<<<< Updated upstream
class Produit extends Db
{

    const TABLE_NAME = "produits";

    protected $id;
    protected $nom;
    protected $description;
    protected $prix;
    protected $stock;
    protected $photo;


    public function setId($id)
    {
=======
class Produit extends Db {

    const TABLE_NAME = "clients";

    protected $id;
    protected $nom;
    protected $photo;
    protected $description;
    protected $prix;
    protected $stock;


    public function setId($id) {
>>>>>>> Stashed changes
        $this->id = $id;
        return $this;
    }

<<<<<<< Updated upstream
    public function setNom($nom)
    {
=======
    public function setNom($nom) {
>>>>>>> Stashed changes
        $this->nom = $nom;
        return $this;
    }

<<<<<<< Updated upstream
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;
        return $this;
    }

    public function setStock($stock)
    {
        $this->stock = $stock;
        return $this;
    }

    public function setPhoto($photo)
    {
        if (isset($photo) and $photo['error'] == 0) {
            // Testons si le fichier n'est pas trop gros
            if ($photo['size'] <= 10000000) {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($photo['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                if (in_array($extension_upload, $extensions_autorisees)) {
                    // On peut valider le fichier et le stocker définitivement
                    move_uploaded_file($photo['tmp_name'],  './public/uploads/' . $photo['name']);

                    $this->photo = $photo['name'];
                    return $this;
                }
            } else {
                throw new Exception('photo trop grande');
            }
        } else {
            throw new Exception('une erreur est survenue à l\'upload du fichier');
        }
    }


    public function getNom()
    {
        return $this->nom;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getPrix()
    {
        return $this->prix;
    }
    public function getStock()
    {
        return $this->stock;
    }
    public function getPhoto()
    {
        return $this->photo;
    }


    public function save()
    {
        $data = [
            "nom"           => $this->getNom(),
            "description"   => $this->getDescription(),
            "prix"          => $this->getPrix(),
            "stock"         => $this->getStock(),
            "photo"         => $this->getPhoto()
        ];

=======
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

    public function save()
    {
        $data = [
            "nom"    => $this->getNom(),
            "email"    => $this->getEmail(),
            "telephone"    => $this->getTelephone(),
            "adresse"    => $this->getAdresse()
        ];
>>>>>>> Stashed changes
        //if ($this->id > 0) return $this->update();
        $nouvelId = Db::dbCreate(self::TABLE_NAME, $data);
        $this->setId($nouvelId);
        return $this;
    }

<<<<<<< Updated upstream
    public static function findAll()
    {
        $data = Db::dbFind(self::TABLE_NAME);
        return $data;
    }
}
=======
    public static function findAll() {
        $data = Db::dbFind(self::TABLE_NAME);
        return $data;
    }
}
>>>>>>> Stashed changes
