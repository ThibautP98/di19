<?php

namespace src\Model;

class Article extends Contenu implements \JsonSerializable
{
    private $Auteur;
    private $DateAjout;
    private $ImageRepository;
    private $ImageFileName;
    private $idCategorie;
    private $Statut;

    public function firstXwords($nb)
    {
        $phrase = $this->getDescription();
        $arrayWord = str_word_count($phrase, 1);

        return implode(" ", array_slice($arrayWord, 0, $nb));
    }

    public function SqlSearch(\PDO $bdd)
    {
        try {
            $searchA = $_GET['search'];
            $requete = $bdd->prepare('SELECT * FROM articles WHERE Titre LIKE :search OR Auteur LIKE :search');
            $requete->execute([
                'search' => '%'.$searchA.'%'
            ]);
            $arrayArticle = $requete->fetchAll();

            $listArticle = [];
            foreach ($arrayArticle as $articleSQL) {
                $article = new Article();
                $article->setId($articleSQL['Id']);
                $article->setTitre($articleSQL['Titre']);
                $article->setAuteur($articleSQL['Auteur']);
                $article->setDescription($articleSQL['Description']);
                $article->setDateAjout($articleSQL['DateAjout']);
                $article->setImageRepository($articleSQL['ImageRepository']);
                $article->setImageFileName($articleSQL['ImageFileName']);
                $article->setIdCategorie($articleSQL['id_categorie']);
                $article->setStatut($articleSQL['id_categorie']);

                $listArticle[] = $article;
            }
            return $listArticle;

        } catch (\Exception $e) {
            return array("result" => false, "message" => $e->getMessage());
        }
    }

    public function SqlAdd(\PDO $bdd)
    {
        try {
            $requete = $bdd->prepare('INSERT INTO articles (Titre, Description, DateAjout, Auteur, ImageRepository, ImageFileName, id_categorie, Statut) 
            VALUES(:Titre, :Description, :DateAjout, :Auteur, :ImageRepository, :ImageFileName,:id_categorie, :Statut)');
            $requete->execute([
                "Titre" => $this->getTitre(),
                "Description" => $this->getDescription(),
                "DateAjout" => $this->getDateAjout(),
                "Auteur" => $this->getAuteur(),
                "ImageRepository" => $this->getImageRepository(),
                "ImageFileName" => $this->getImageFileName(),
                "id_categorie" => $this->getIdCategorie(),
                "Statut" => $this->getStatut(),
            ]);
            return array("result" => true, "message" => $bdd->lastInsertId());
        } catch (\Exception $e) {
            return array("result" => false, "message" => $e->getMessage());
        }

    }

    public function SqlGetAll(\PDO $bdd)
    {
        $requete = $bdd->prepare('SELECT articles.Id AS Id, articles.Titre AS Titre, articles.Description AS Description, articles.DateAjout AS DateAjout, articles.Auteur AS Auteur, articles.ImageRepository AS ImageRepository,articles.ImageFileName AS ImageFileName, articles.id_categorie AS id_categorie, articles.statut AS statut ,categorie.libelle
        FROM articles INNER JOIN categorie ON categorie.id = articles.id_categorie');
        $requete->execute();
        $arrayArticle = $requete->fetchAll();

        $listArticle = [];
        foreach ($arrayArticle as $articleSQL) {
            $article = new Article();
            $article->setId($articleSQL['Id']);
            $article->setTitre($articleSQL['Titre']);
            $article->setAuteur($articleSQL['Auteur']);
            $article->setDescription($articleSQL['Description']);
            $article->setDateAjout($articleSQL['DateAjout']);
            $article->setImageRepository($articleSQL['ImageRepository']);
            $article->setImageFileName($articleSQL['ImageFileName']);
            $article->setIdCategorie($articleSQL['id_categorie']);
            $article->setStatut($articleSQL['statut']);

            $listArticle[] = $article;
        }
        return $listArticle;
    }

    public function SqlGet(\PDO $bdd, $idArticle)
    {
        $requete = $bdd->prepare('SELECT articles.Id AS Id, articles.Titre AS Titre, articles.Description AS Description, articles.DateAjout AS DateAjout, articles.Auteur AS Auteur, articles.ImageRepository AS ImageRepository,articles.ImageFileName AS ImageFileName, articles.id_categorie AS id_categorie, articles.statut AS statut ,categorie.libelle
        FROM articles INNER JOIN categorie ON categorie.id = articles.id_categorie');
        $requete->execute([
            'idArticle' => $idArticle
        ]);

        $datas = $requete->fetch();

        $article = new Article();
        $article->setId($datas['Id']);
        $article->setTitre($datas['Titre']);
        $article->setAuteur($datas['Auteur']);
        $article->setDescription($datas['Description']);
        $article->setDateAjout($datas['DateAjout']);
        $article->setImageRepository($datas['ImageRepository']);
        $article->setImageFileName($datas['ImageFileName']);
        $article->setidCategorie($datas['id_categorie']);
        $article->setStatut($datas['statut']);

        return $article;
    }

    public function SqlGetLast(\PDO $bdd){
        $requete = $bdd->prepare('SELECT * FROM articles ORDER BY DateAjout DESC LIMIT 5');
        $requete->execute();
        $arrayArticle = $requete->fetchAll();

        $listArticle = [];
        foreach ($arrayArticle as $articleSQL){
            $article = new Article();
            $article->setId($articleSQL['Id']);
            $article->setTitre($articleSQL['Titre']);
            $article->setAuteur($articleSQL['Auteur']);
            $article->setDescription($articleSQL['Description']);
            $article->setDateAjout($articleSQL['DateAjout']);
            $article->setImageRepository($articleSQL['ImageRepository']);
            $article->setImageFileName($articleSQL['ImageFileName']);
            $article->setidCategorie($articleSQL['id_categorie']);
            $article->setStatut($articleSQL['statut']);

            $listArticle[] = $article;
        }
        return $listArticle;
    }

    public function SqlUpdate(\PDO $bdd)
    {
        try {
            $requete = $bdd->prepare('UPDATE articles set Titre=:Titre, Description=:Description, DateAjout=:DateAjout, Auteur=:Auteur, ImageRepository=:ImageRepository, ImageFileName=:ImageFileName, id_categorie=:id_categorie , Statut=:Statut WHERE id=:idArticle');
            $requete->execute([
                'Titre' => $this->getTitre()
                , 'Description' => $this->getDescription()
                , 'DateAjout' => $this->getDateAjout()
                , 'Auteur' => $this->getAuteur()
                , 'ImageRepository' => $this->getImageRepository()
                , 'ImageFileName' => $this->getImageFileName()
                , 'idArticle' => $this->getId()
                , 'id_categorie' => $this->getIdCategorie()
                , 'Statut' => $this->getStatut()
            ]);
            return array("0", "[OK] Update");
        } catch (\Exception $e) {
            return array("1", "[ERREUR] " . $e->getMessage());
        }
    }

    public function SqlDelete(\PDO $bdd, $idArticle)
    {
        try {
            $requete = $bdd->prepare('DELETE FROM articles where Id = :idArticle');
            $requete->execute([
                'idArticle' => $idArticle
            ]);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function SqlTruncate(\PDO $bdd)
    {
        try {
            $requete = $bdd->prepare('TRUNCATE TABLE articles');
            $requete->execute();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function jsonSerialize()
    {
        return [
            'Id' => $this->getId()
            , 'Titre' => $this->getTitre()
            , 'Description' => $this->getDescription()
            , 'DateAjout' => $this->getDateAjout()
            , 'ImageRepository' => $this->getImageRepository()
            , 'ImageFileName' => $this->getImageFileName()
            , 'Auteur' => $this->getAuteur()
            , 'idCategorie' => $this->getIdCategorie()
            , 'Statut' => $this->getStatut()
        ];
    }


    /**
     * @return mixed
     */
    public function getAuteur()
    {
        return $this->Auteur;
    }

    /**
     * @param mixed $Auteur
     * @return Article
     */
    public function setAuteur($Auteur)
    {
        $this->Auteur = $Auteur;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateAjout()
    {
        return $this->DateAjout;
    }

    /**
     * @param mixed $DateAjout
     * @return Article
     */
    public function setDateAjout($DateAjout)
    {
        $this->DateAjout = $DateAjout;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImageRepository()
    {
        return $this->ImageRepository;
    }

    /**
     * @param mixed $ImageRepository
     * @return Article
     */
    public function setImageRepository($ImageRepository)
    {
        $this->ImageRepository = $ImageRepository;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImageFileName()
    {
        return $this->ImageFileName;
    }

    /**
     * @param mixed $ImageFileName
     * @return Article
     */
    public function setImageFileName($ImageFileName)
    {
        $this->ImageFileName = $ImageFileName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdCategorie()
    {
        return $this->idCategorie;
    }

    /**
     * @param mixed $idCategorie
     */
    public function setIdCategorie($idCategorie)
    {
        $this->idCategorie = $idCategorie;
    }

    /**
     * @return mixed
     */
    public function getStatut()
    {
        return $this->Statut;
    }

    /**
     * @param mixed $Statut
     */
    public function setStatut($Statut)
    {
        $this->Statut = $Statut;
    }
}