<?php
namespace src\Model;

class Categorie extends Contenu implements \JsonSerializable {
    private $Libelle;
    private $Description;


    public function SqlSearchCat(\PDO $bdd) {
        try{
            $searchA = $_GET['search'];
            $requete = $bdd->prepare('SELECT * FROM categorie WHERE libelle LIKE :search');
            $requete->execute([
                'search' => '%'.$searchA.'%'
            ]);
            $arrayCategorie = $requete->fetchAll();

            $listCategorie = [];
            foreach ($arrayCategorie as $CategorieSQL){
                $Categorie = new Categorie();
                $Categorie->setId($CategorieSQL['id']);
                $Categorie->setLibelle($CategorieSQL['libelle']);
                $Categorie->setDescription($CategorieSQL['description']);

                $listCategorie[] = $Categorie;
            }
            return $listCategorie;

        }catch (\Exception $e){
            return array("result"=>false,"message"=>$e->getMessage());
        }
    }

    public function SqlAddCat(\PDO $bdd) {
        try{
            $requete = $bdd->prepare('INSERT INTO categorie (libelle, description) VALUES(:libelle, :description)');
            $requete->execute([
                "libelle" => $this->getlibelle(),
                "description" => $this->getDescription(),

            ]);
            return array("result"=>true,"message"=>$bdd->lastInsertId());
        }catch (\Exception $e){
            return array("result"=>false,"message"=>$e->getMessage());
        }

    }

    public function SqlGetAllCat(\PDO $bdd){
        $requete = $bdd->prepare('SELECT * FROM categorie');
        $requete->execute();
        $arrayCategorie = $requete->fetchAll();

        $listCategorie = [];
        foreach ($arrayCategorie as $CategorieSQL){
            $Categorie = new Categorie();
            $Categorie->setId($CategorieSQL['id']);
            $Categorie->setLibelle($CategorieSQL['libelle']);
            $Categorie->setDescription($CategorieSQL['description']);



            $listCategorie[] = $Categorie;
        }
        return $listCategorie;
    }
    public function SqlGetcat(\PDO $bdd,$idCategorie){
        $requete = $bdd->prepare('SELECT * FROM categorie where Id = :idCategorie');
        $requete->execute([
            'idCategorie' => $idCategorie
        ]);

        $datas =  $requete->fetch();

        $Categorie = new Categorie();
        $Categorie->setId($datas['id']);
        $Categorie->setLibelle($datas['libelle']);
        $Categorie->setDescription($datas['description']);


        return $Categorie;
    }

    public function SqlUpdateCat(\PDO $bdd){
        try{
            $requete = $bdd->prepare('UPDATE categorie set libelle=:libelle, description=:description WHERE id=:IDcategorie');
            $requete->execute([
                'libelle' => $this->getLibelle()
                ,'description' => $this->getDescription()
                , 'IDcategorie' => $this->getId()
            ]);
            return array("0", "[OK] Update");
        }catch (\Exception $e){
            return array("1", "[ERREUR] ".$e->getMessage());
        }
    }

    public function SqlDeleteCat (\PDO $bdd, $idCategorie){
        try{
            $requete = $bdd->prepare('DELETE FROM categorie where Id=:idCategorie');
            $requete->execute([
                'idCategorie' => $idCategorie
            ]);
            return true;
        }catch (\Exception $e){
            return false;
        }
    }

    public function SqlTruncateCat (\PDO $bdd){
        try{
            $requete = $bdd->prepare('TRUNCATE TABLE Categorie');
            $requete->execute();
            return true;
        }catch (\Exception $e){
            return false;
        }
    }


    public function jsonSerialize()
    {
        return [
            'Id' => $this->getId()
            ,'libelle' => $this->getLibelle()
            ,'description' => $this->getDescription()
        ];
    }


    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->Libelle;
    }

    /**
     * @param mixed $Libelle
     * @return Categorie
     */
    public function setLibelle($Libelle)
    {
        $this->Libelle = $Libelle;
        return $this;
    }
}