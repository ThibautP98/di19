<?php

namespace src\Controller;

use src\Model\User;
use src\Model\Bdd;

class UserController extends AbstractController
{
    public function affUser($idUser)
    {
        $userSQL = new User();
        $user = $userSQL->SqlGet(BDD::getInstance(), $idUser);

        //Lancer la vue TWIG
        return $this->twig->render('User/list.html.twig', [
            'user' => $user]);
    }

    public function loginForm()
    {
        return $this->twig->render('User/login.html.twig');
    }

    public function registerForm()
    {
        return $this->twig->render('User/register.html.twig');
    }

    public function registerCheck()
    {
        if ($_POST['username'] && $_POST['email'] && $_POST['password'] && $_POST['checkPwd']) {
            if ($_POST['password'] == $_POST['checkPwd']) {
                if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                    $_SESSION['errorlogin'] = "Veuillez saisir une adresse mail valide.";
                    header('Location:/Register');
                    return;
                }
                if (!filter_var($_POST['password'], FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/[a-zA-Z]{4,}/")))) {
                    $_SESSION['errorlogin'] = "Le mot de passe doit contenir au moins 4 caractères.";
                    header('Location:/Register');
                    return;
                }
                $username = $_POST['username'];
                $mail = $_POST['email'];
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

                $utilisateur = new User();
                $utilisateur->setUsername($username)
                    ->setMail($mail)
                    ->setPassword($password);
                $utilisateur->SqlAdd(BDD::getInstance());
                header('Location:/Login/');
            }
        }
    }

    /*public function loginCheck()
    {
        $_POST['username'] = "toto";
        if (!filter_var(
            $_POST['password'],
            FILTER_VALIDATE_REGEXP,
            array("options" => array("regexp" => "/[a-zA-Z]{3,}/")))) {
            $_SESSION['errorlogin'] = "Mpd mini 3 caractères";
            header('Location:/Login');
            return;
        }
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $_SESSION['errorlogin'] = "Mail invalide";
            header('Location:/Login');
            return;
        }
        if ($_POST["email"] == "admin@admin.com"
            AND $_POST["password"] == "password"
        ) {
            $_SESSION['login'] = array(
                'Nom' => 'Administrateur'
            , 'Prénom' => 'Sylvain'
            , 'roles' => array('admin', 'redacteur')
            );
            header('Location:/RecapUser');
        } else {
            $_SESSION['errorlogin'] = "Erreur Authent.";
            header('Location:/Login');
        }
    }*/

    public function loginCheck()
    {
        if ($_POST['email'] && $_POST['password']) {
            $mail = $_POST['email'];
            $password = $_POST['password'];

            $user = new User();
            $userInfo = $user->SqlGetMail(Bdd::GetInstance(), $mail);

            if (password_verify($password, $userInfo['password'])) {
                $_SESSION['login'] = array(
                    'username' => $userInfo['username']
                , 'mail' => $userInfo['mail']
                , 'role' => json_decode($userInfo['role'])
                );
                header('Location:/RecapUser/' . $userInfo['id']);
            } else {
                $_SESSION['errorlogin'] = "Erreur Authent.";
                header('Location:/Login');
            }

        } else {
            $_SESSION['errorlogin'] = "Veuillez renseigner tous les champs.";
            header('Location:/Login');
        }
    }

    public static function roleNeed($roleATester)
    {
        if (isset($_SESSION['login'])) {
            if (!in_array($roleATester, $_SESSION['login']['roles'])) {
                $_SESSION['errorlogin'] = "Manque le role : " . $roleATester;
                header('Location:/Contact');
            }
        } else {
            $_SESSION['errorlogin'] = "Veuillez vous identifier";
            header('Location:/Login');
        }
    }

    public function logout()
    {
        unset($_SESSION['login']);
        unset($_SESSION['errorlogin']);

        header('Location:/Login');
    }

}