<?php
namespace src\Controller;

use src\Model\Bdd;
use DateTime;
use src\Model\Categorie;
use function Couchbase\defaultDecoder;

class CategorieController extends AbstractController {

//CRUD des catégorie
    public function IndexCat(){
        return $this->AllCat();
    }

    public function AllCat(){
        $Categorie = new Categorie();
        $listCategorie = $Categorie->SqlGetAllCat(Bdd::GetInstance());

        //Lancer la vue TWIG
        return $this->twig->render(
            'Categorie/Catlist.html.twig',[
                'CategorieList' => $listCategorie
            ]
        );
    }
// avoir pour recherché par catégorie
    public function SearchCat(){
        $Search = new Categorie();
        $listSearch = $Search->SqlSearchCat(Bdd::GetInstance());
        return $this->twig->render(
            'Categorie/Catlist.html.twig',[
                'CategorieList' => $listSearch
            ]
        );
    }
//fonctionnel
    public function addCat(){
        //UserController::roleNeed('redacteur');
        if($_POST AND $_SESSION['token'] == $_POST['token']){
            $sqlRepository = null;
            $Categorie = new Categorie();
            $Categorie->setLibelle($_POST['Titre'])
                ->setDescription($_POST['Description'])
            ;
            $Categorie->SqlAddCat(BDD::getInstance());
            header('Location:/Categorie');
        }else{
            // Génération d'un TOKEN
            $token = bin2hex(random_bytes(32));
            $_SESSION['token'] = $token;
            return $this->twig->render('Categorie/CatAdd.html.twig',
                [
                    'token' => $token
                ]);
        }
    }
//fonctionnelle
    public function updateCat($CategorieID){
        $CategorieSQL = new Categorie();
        $Categorie = $CategorieSQL->SqlGetcat(BDD::getInstance(),$CategorieID);
        if($_POST) {
            $Categorie->setLibelle($_POST['Titre'])
                    ->setDescription($_POST['Description'])
            ;
            $Categorie->SqlUpdateCat(BDD::getInstance());
        }

        return $this->twig->render('Categorie/Catupdate.html.twig',[
            'Categorie' => $Categorie

        ]);
    }
//fonctionnelle
    public function deleteCat($CategorieID){
        $CategorieSQL = new Categorie();
        $Categorie = $CategorieSQL->SqlGetcat(BDD::getInstance(),$CategorieID);
        $Categorie->SqlDeleteCat(BDD::getInstance(),$CategorieID);
        header('Location:/Categorie/');
    }

}
