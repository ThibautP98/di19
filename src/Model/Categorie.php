<?php
namespace src\Model;

class Categorie extends Contenu implements \JsonSerializable {
    private $Libelle;
    private $Description;


    public function firstXwords($nb){
        $phrase = $this->getDescription();
        $arrayWord = str_word_count($phrase,1);

        return implode(" ",array_slice($arrayWord,0,$nb));
    }

    public function SqlSearchCat(\PDO $bdd) {
        try{
            $searchA = $_GET['search'];
            $requete = $bdd->prepare('SELECT * FROM Categorie WHERE Libelle LIKE :search');
            $requete->execute([
                'search' => '%'.$searchA.'%'
            ]);
            $arrayCategorie = $requete->fetchAll();

            $listCategorie = [];
            foreach ($arrayCategorie as $CategorieSQL){
                $Categorie = new Categorie();
                $Categorie->setId($CategorieSQL['Id']);
                $Categorie->setLibelle($CategorieSQL['Libelle']);
                $Categorie->setDescription($CategorieSQL['Description']);


                $listCategorie[] = $Categorie;
            }
            return $listCategorie;

        }catch (\Exception $e){
            return array("result"=>false,"message"=>$e->getMessage());
        }
    }

    public function SqlAddCat(\PDO $bdd) {
        try{
            $requete = $bdd->prepare('INSERT INTO Categorie (Libelle, Description) VALUES(:Libelle, :Description)');
            $requete->execute([
                "Libelle" => $this->getlibelle(),
                "Description" => $this->getDescription(),

            ]);
            return array("result"=>true,"message"=>$bdd->lastInsertId());
        }catch (\Exception $e){
            return array("result"=>false,"message"=>$e->getMessage());
        }

    }

    public function SqlGetAllCat(\PDO $bdd){
        $requete = $bdd->prepare('SELECT * FROM Categorie');
        $requete->execute();
        $arrayCategorie = $requete->fetchAll();

        $listCategorie = [];
        foreach ($arrayCategorie as $CategorieSQL){
            $Categorie = new Categorie();
            $Categorie->setId($CategorieSQL['Id']);
            $Categorie->setLibelle($CategorieSQL['Libelle']);
            $Categorie->setDescription($CategorieSQL['Description']);


            $listCategorie[] = $Categorie;
        }
        return $listCategorie;
    }
    public function SqlGetcat(\PDO $bdd,$idCategorie){
        $requete = $bdd->prepare('SELECT * FROM Categorie where Id = :idCategorie');
        $requete->execute([
            'idCategorie' => $idCategorie
        ]);

        $datas =  $requete->fetch();

        $Categorie = new Categorie();
        $Categorie->setId($datas['Id']);
        $Categorie->setLibelle($datas['Libelle']);
        $Categorie->setDescription($datas['Description']);


        return $Categorie;
    }

    public function SqlUpdateCat(\PDO $bdd){
        try{
            $requete = $bdd->prepare('UPDATE Categorie set libelle=:libelle, Description=:Description WHERE id=:IDCATEGORIE');
            $requete->execute([
                'Libelle' => $this->getlibelle()
                ,'Description' => $this->getDescription()

            ]);
            return array("0", "[OK] Update");
        }catch (\Exception $e){
            return array("1", "[ERREUR] ".$e->getMessage());
        }
    }

    public function SqlDeleteCat (\PDO $bdd,$idCategorie){
        try{
            $requete = $bdd->prepare('DELETE FROM Categorie where Id = :idCategorie');
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
            ,'Libelle' => $this->getLibelle()
            ,'Description' => $this->getDescription()

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