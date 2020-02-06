<?php
//todo -> Utiliser le token au log et $_session
namespace src\Controller;

use src\Model\User;
use src\Model\Bdd;

class UserController extends AbstractController
{
    public function affUser($idUser)
    {
        $_SESSION['errorlogin'] = array();
        $userSQL = new User();
        $user = $userSQL->SqlGet(BDD::getInstance(), $idUser);
        if ((isset($_SESSION)) && ($_SESSION['login']['id'] == $idUser)) {
            //Lancer la vue TWIG
            return $this->twig->render('User/list.html.twig', [
                'user' => $user]);
        } else {
            $_SESSION['errorlogin'] = "Impossible d'accéder à votre demande.";
            $this->twig->render('User/login.html.twig');
            return $_SESSION['errorlogin'];
        }
    }

    public
    function affAllUser()
    {
        $_SESSION['errorlogin'] = array();
        $user = new User();
        $listUser = $user->SqlGetAll(BDD::getInstance());

        //Lancer la vue TWIG
        return $this->twig->render(
            'User/listAll.html.twig', [
                'userList' => $listUser
            ]
        );
    }

    public
    function affPanelAdmin()
    {
        //Lancer la vue TWIG
        //Uniquement si role == admin
        return $this->twig->render(
            'User/panelAdmin.html.twig'
        );
    }

    public
    function loginForm()
    {
        return $this->twig->render('User/login.html.twig');
    }

    public
    function registerForm()
    {
        return $this->twig->render('User/register.html.twig');
    }

    public
    function registerCheck()
    {
        $_SESSION['errorlogin'] = array();
        if ($_POST['username'] && $_POST['mail'] && $_POST['password'] && $_POST['checkPwd']) {
            if ($_POST['password'] == $_POST['checkPwd']) {
                if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
                    $_SESSION['errorlogin'] = "Veuillez saisir une adresse mail valide.";
                    header('Location:/User/Register');
                    return;
                }
                if (!filter_var($_POST['password'], FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/[a-zA-Z]{4,}/")))) {
                    $_SESSION['errorlogin'] = "Le mot de passe doit contenir au moins 4 caractères.";
                    header('Location:/User/Register');
                    return;
                }

                $token = bin2hex(random_bytes(25));
                $username = htmlentities(strip_tags($_POST['username']));
                $mail = htmlentities(strip_tags($_POST['mail']));
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $role = json_encode(array($_POST['roleAdmin'], $_POST['roleRedac']));

                $utilisateur = new User();
                $utilisateur->setToken($token)
                    ->setUsername($username)
                    ->setMail($mail)
                    ->setPassword($password)
                    ->setRole($role);
                $utilisateur->SqlAdd(BDD::getInstance());
                header('Location:/User/Login/');
            } else {
                $_SESSION['errorlogin'] = "Les mots de passe saisis doivent être identiques.";
                header('Location:/User/Register');
                return;
            }
        }
    }

    public
    function loginCheck()
    {
        $_SESSION['errorlogin'] = array();
        if ($_POST['mail'] && $_POST['password']) {
            $mail = $_POST['mail'];
            $password = $_POST['password'];

            $user = new User();
            $userInfo = $user->SqlGetMail(Bdd::GetInstance(), $mail);

            if (password_verify($password, $userInfo['password'])) {

                $_SESSION['login'] = array(
                    'id' => $userInfo['id']
                , 'username' => $userInfo['username']
                , 'mail' => $userInfo['mail']
                , 'role' => json_decode($userInfo['role'])
                );
                header('Location:/User/MonEspace/' . $userInfo['id']);
            } else {
                $_SESSION['errorlogin'] = "Adresse mail ou mot de passe saisi incorrect.";
                header('Location:/User/Login');
            }

        } else {
            $_SESSION['errorlogin'] = "Veuillez renseigner tous les champs.";
            header('Location:/User/Login');
        }
    }


    public
    function update($userID)
        //todo -> Corriger l'erreur de
    {
        $_SESSION['errorlogin'] = array();
        $userSQL = new User();
        $user = $userSQL->SqlGet(BDD::getInstance(), $userID);
        if ($_POST) {
            $user->setUsername($_POST['username'])
                ->setMail($_POST['mail'])
                ->setRole($_POST['roleAdmin'] . $_POST['roleRedac']);

            $user->SqlUpdate(BDD::getInstance());
        }

        return $this->twig->render('/User/update.html.twig', [
            'user' => $user
        ]);
    }

    public
    static function roleNeed($roleATester)
    {
        $_SESSION['errorlogin'] = array();
        if (isset($_SESSION['login'])) {
            if (!in_array($roleATester, $_SESSION['login']['roles'])) {
                $_SESSION['errorlogin'] = "Manque le role : " . $roleATester;
                header('Location:/Contact');
            }
        } else {
            $_SESSION['errorlogin'] = "Veuillez vous identifier";
            header('Location:/User/Login');
        }
    }

    public
    function logout()
    {
        $_SESSION = array();
        unset($_SESSION['login']);
        unset($_SESSION['errorlogin']);
        session_destroy();
        header('Location:/User/Login');
    }

}