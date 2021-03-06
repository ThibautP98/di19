<?php
session_start();
require '../vendor/autoload.php';

function chargerClasse($classe){
    $ds = DIRECTORY_SEPARATOR;
    $dir = __DIR__."{$ds}.."; //Remonte d'un cran par rapport à index.php
    $classeName = str_replace('\\', $ds,$classe);

    $file = "{$dir}{$ds}{$classeName}.php";
    if(is_readable($file)){
        require_once $file;
    }
}

spl_autoload_register('chargerClasse');

$router = new \src\Router\Router($_GET['url']);
$router->get('/', "Article#ListAll");

$router->get('/Article', "Article#ListAll");
$router->get('/Article/Update/:id', "Article#Update#id");
$router->post('/Article/Update/:id', "Article#Update#id");
$router->get('/Article/Add', "Article#Add");
$router->post('/Article/Add', "Article#Add");
$router->get('/Article/Delete/:id', "Article#Delete#id");
$router->get('/Article/Fixtures', "Article#Fixtures");
$router->get('/Article/Write', "Article#Write");
$router->get('/Article/Read', "Article#Read");
$router->get('/Article/WriteOne/:id', "Article#Read#id");
$router->get('/Article/ListAll','Article#listAll');
$router->get('/Article/Search','Article#Search');
$router->get('/Article/Show/:id', "Article#AffArticle#id");

$router->get('/Api/Article', "Api#ArticleGet");
$router->post('/Api/Article', "Api#ArticlePost");
$router->put('/Api/Article/:id/:json', "Api#ArticlePut#id#json");
$router->get('/Api/Article/Last','Api#ArticleGetLast');

$router->get('/Categorie', "Categorie#AllCat");
$router->get('/Categorie/UpdateCat/:id', "Categorie#updateCat#id");
$router->post('/Categorie/UpdateCat/:id', "Categorie#updateCat#id");
$router->get('/Categorie/AddCat', "Categorie#addCat");
$router->post('/Categorie/AddCat', "Categorie#addCat");
$router->get('/Categorie/DeleteCat/:id', "Categorie#deleteCat#id");

$router->get('/User/', "User#affCompte");
$router->get('/User/Login', 'User#loginForm');
$router->post('/User/Login', 'User#loginCheck');
$router->get('/User/Logout', 'User#logout');
$router->get('/User/Register', 'User#registerForm');
$router->post('/User/Register', 'User#registerCheck');
$router->get('/User/MonEspace/:id', "User#affUser#id");
$router->get('/User/ListAll',"User#affAllUser");
$router->get('/User/Update/:id', "User#Update#id");
$router->post('/User/Update/:id', "User#Update#id");
$router->get('/User/Delete/:id', "User#delete#id");
$router->get('/User/Compte', "User#affCompte");

$router->get('/User/MonEspace/Admin/:id', 'User#affPanelAdmin#id');

$router->post('/Contact/sendMail/:id', 'Contact#sendMail#id');

echo $router->run();



