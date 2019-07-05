<?php

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
        $this->id = $id;
        return $this;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

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
        if (!empty($photo['name'])) {
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

        return;
        
    }


    public function getId()
    {
        return $this->id;
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

        //if ($this->id > 0) return $this->update();
        $nouvelId = Db::dbCreate(self::TABLE_NAME, $data);
        $this->setId($nouvelId);
        return $this;
    }


    public function update()
    {
        if ($this->id > 0) {
            $data = [
                "id"            => $this->getId(),
                "nom"           => $this->getNom(),
                "description"   => $this->getDescription(),
                "prix"          => $this->getPrix(),
                "stock"         => $this->getStock(),
                //"photo"         => $this->getPhoto()
            ];
            Db::dbUpdate(self::TABLE_NAME, $data);
            return $this;
        }
        return;
    }


    public function delete()
    {
        $data = [
            'id' => $this->getId(),
        ];

        Db::dbDelete(self::TABLE_NAME, $data);
        return;
    }


    public static function findAll()
    {
        $data = Db::dbFind(self::TABLE_NAME);
        return $data;
    }


    public static function find(array $request)
    {
        $data = Db::dbFind(self::TABLE_NAME, $request);
        return $data;
    }

    public static function findOne(int $id)
    {
        $request = [
            ['id', '=', $id]
        ];
        $element = Db::dbFind(self::TABLE_NAME, $request);
        if (count($element) > 0) $element = $element[0];
        else return;

        $produit = new Produit;
        $produit->setId($element['id']);
        $produit->setNom($element['nom']);
        $produit->setDescription($element['description']);
        $produit->setPrix($element['prix']);
        $produit->setStock($element['stock']);
        $produit->setPhoto($element['photo']);

        return $produit;
    }
}
