<?php
namespace src\Controller;

use src\Model\Bdd;
use DateTime;
use src\Model\Categorie;
use function Couchbase\defaultDecoder;

class CategorieController extends AbstractController {

    public function IndexCat(){
        return $this->ListAll();
    }

    public function AllCat(){
        $Categorie = new Categorie();
        $listCategorie = $Categorie->SqlGetAll(Bdd::GetInstance());

        //Lancer la vue TWIG
        return $this->twig->render(
            'Categorie/list.html.twig',[
                'CategorieList' => $listCategorie
            ]
        );
    }

    public function SearchCat(){
        $Search = new Categorie();
        $listSearch = $Search->SqlSearchCat(Bdd::GetInstance());
        return $this->twig->render(
            'Categorie/list.html.twig',[
                'CategorieList' => $listSearch
            ]
        );
    }

    public function addCat(){
        //UserController::roleNeed('redacteur');
        if($_POST AND $_SESSION['token'] == $_POST['token']){
            $sqlRepository = null;
            $nomImage = null;
            if(!empty($_FILES['image']['name']) )
            {
                $tabExt = array('jpg','gif','png','jpeg');    // Extensions autorisees
                $extension  = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                if(in_array(strtolower($extension),$tabExt))
                {
                    $nomImage = md5(uniqid()) .'.'. $extension;
                    $dateNow = new DateTime();
                    $sqlRepository = $dateNow->format('Y/m');
                    $repository = './uploads/images/'.$dateNow->format('Y/m');
                    if(!is_dir($repository)){
                        mkdir($repository,0777,true);
                    }
                    move_uploaded_file($_FILES['image']['tmp_name'], $repository.'/'.$nomImage);
                }
            }
            $categorie = new Categorie();
            $categorie->setLibelle($_POST['Libelle'])
                ->setDescription($_POST['Description'])


            ;
            $categorie->SqlAddCat(BDD::getInstance());
            header('Location:/Categorie');
        }else{
            // Génération d'un TOKEN
            $token = bin2hex(random_bytes(32));
            $_SESSION['token'] = $token;
            return $this->twig->render('Categorie/add.html.twig',
                [
                    'token' => $token
                ]);
        }
    }

    public function updateCat($CategorieID){
        $CategorieSQL = new Categorie();
        $Categorie = $CategorieSQL->SqlGetcat(BDD::getInstance(),$CategorieID);
        if($_POST) {
            $sqlRepository = null;
            $nomImage = null;
            if(!empty($_FILES['image']['name']) )
            {
                $tabExt = array('jpg','gif','png','jpeg');    // Extensions autorisees
                $extension  = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                if(in_array(strtolower($extension),$tabExt))
                {
                    $nomImage = md5(uniqid()) .'.'. $extension;
                    $dateNow = new DateTime();
                    $sqlRepository = $dateNow->format('Y/m');
                    $repository = './uploads/images/'.$dateNow->format('Y/m');
                    if(!is_dir($repository)){
                        mkdir($repository,0777,true);
                    }
                    move_uploaded_file($_FILES['image']['tmp_name'], $repository.'/'.$nomImage);
                    // suppression ancienne image si existante

                    if($_POST['imageAncienne'] != '/'){
                        unlink('./uploads/images/'.$_POST['imageAncienne']);
                    }
                }
            }

            $Categorie->setLibelle($_POST['Libelle'])
                ->setDescription($_POST['Description'])
            ;

            $Categorie->SqlUpdateCat(BDD::getInstance());
        }

        return $this->twig->render('Categorie/update.html.twig',[
            'Categorie' => $Categorie
        ]);
    }

    public function DeleteCat($CategorieID){
        $CategorieSQL = new Categorie();
        $Categorie = $CategorieSQL->SqlGetcat(BDD::getInstance(),$CategorieID);
        $Categorie->SqlDeleteCat(BDD::getInstance(),$CategorieID);
        if($Categorie->getImageFileName() != ''){
            unlink('./uploads/images/'.$Categorie->getImageRepository().'/'.$Categorie->getImageFileName());
        }

        header('Location:/');
    }

    public function fixtures(){
        $arrayAuteur = array('Fabien', 'Brice', 'Bruno', 'Jean-Pierre', 'Benoit', 'Emmanuel', 'Sylvie', 'Marion');
        $arrayTitre = array('PHP en force', 'React JS une valeur montante', 'C# toujours au top', 'Java en légère baisse'
        , 'Les entreprises qui recrutent', 'Les formations à ne pas rater', 'Les langages populaires en 2020', 'L\'année du Javascript');
        $dateajout = new DateTime();
        $article = new Categorie();
        $article->SqlTruncate(BDD::getInstance());
        for($i = 1;$i <=200; $i++){
            shuffle($arrayAuteur);
            shuffle($arrayTitre);

            $dateajout->modify('+'.$i.' day');

            $article->setTitre($arrayTitre[0])
                ->setDescription('On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).')
                ->setDateAjout($dateajout->format('Y-m-d'))
                ->setAuteur($arrayAuteur[0]);
            $article->SqlAdd(BDD::getInstance());
        }
        header('Location:/Article');
    }


    public function Write(){

        $article = new Categorie();
        $listArticle = $article->SqlGetAll(Bdd::GetInstance());

        $file = 'article.json';
        if(!is_dir('./uploads/file/')){

            mkdir('./uploads/file/', 0777, true);
        }
        file_put_contents('./uploads/file/'.$file, json_encode($listArticle));

        header('location:/Article/');
    }

    public function Read(){
        $file='article.json';
        $datas = file_get_contents('./uploads/file/'.$file);
        $contenu = json_decode($datas);

        return $this->twig->render('Article/readfile.html.twig', [
            'fileData' => $contenu
        ]);
    }

    public function WriteOne($idArticle){
        $article = new Categorie();
        $articleData = $article->SqlGet(Bdd::GetInstance(), $idArticle);

        $file = 'article_'.$idArticle.'.json';
        if(!is_dir('./uploads/file/')){
            mkdir('./uploads/file/', 0777, true);
        }
        file_put_contents('./uploads/file/'.$file, json_encode($articleData));

        header('location:/Article/');
    }

    public function test($param1,$param2){
        var_dump($param1);
        var_dump($param2);
    }

}
