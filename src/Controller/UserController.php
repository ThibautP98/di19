<?php
//todo -> Utiliser le token au log et $_session
namespace src\Controller;

use src\Model\User;
use src\Model\Bdd;

class UserController extends AbstractController
{
    public function affUser($idUser)
    {
//        if () {
//            header('Location:/Login/');
//        } else {
            //todo -> bloquer page mon espace tant qu'on est pas log
            $userSQL = new User();
            $user = $userSQL->SqlGet(BDD::getInstance(), $idUser);

            //Lancer la vue TWIG
            return $this->twig->render('User/list.html.twig', [
                'user' => $user]);
//        }
    }

    public function affAllUser()
    {
        $user = new User();
        $listUser = $user->SqlGetAll(BDD::getInstance());

        //Lancer la vue TWIG
        return $this->twig->render(
            'User/listAll.html.twig', [
                'userList' => $listUser
            ]
        );
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
                $mail = htmlentities(strip_tags($_POST['email']));
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

    public static function roleNeed($roleATester)
    {
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

    public function logout()
    {
        unset($_SESSION['login']);
        unset($_SESSION['errorlogin']);

        header('Location:/User/Login');
    }

}