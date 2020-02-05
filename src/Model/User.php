<?php

namespace src\Model;

class User extends Contenu implements \JsonSerializable
{
    private $Id;
    private $Username;
    private $Mail;
    private $Password;

    /*public function SqlGetAll(\PDO $bdd){
        $requete = $bdd->prepare('SELECT * FROM utilisateurs');
        $requete->execute();
        $arrayUser = $requete->fetchAll();

        $listUser = [];
        foreach ($arrayUser as $userSQL){
            $user = new User();
            $user->setId($userSQL['id']);
            $user->setUsername($userSQL['username']);
            $user->setMail($userSQL['mail']);
            $user->setPassword($userSQL['password']);

            $listUser[] = $user;
        }
        return $listUser;
    }*/

    public function SqlGet(\PDO $bdd, $idUser)
    {
        $requete = $bdd->prepare('SELECT * FROM utilisateurs where Id = :id');
        $requete->execute([
            'id' => $idUser
        ]);

        $datas = $requete->fetch();

        $user = new User();
        $user->setId($datas['id']);
        $user->setUsername($datas['username']);
        $user->setMail($datas['mail']);

        return $user;
    }

    public function SqlGetMail(\PDO $bdd,$mailUser)
    {
        $requete = $bdd->prepare('SELECT * FROM utilisateurs where mail = :mail');
        $requete->execute([
            'mail' => $mailUser
        ]);

        $datas = $requete->fetch();

        return $datas;
    }

    public function SqlAdd(\PDO $bdd)
    {
        try {
            $requete = $bdd->prepare('INSERT INTO utilisateurs (username, mail, password) VALUES(:username, :mail, :password)');
            $requete->execute([
                "username" => $this->getUsername(),
                "mail" => $this->getMail(),
                "password" => $this->getPassword()
            ]);
            return array("result" => true, "message" => $bdd->lastInsertId());
        } catch (\Exception $e) {
            return array("result" => false, "message" => $e->getMessage());
        }
    }

    public function jsonSerialize()
    {
        return [
            'Id' => $this->getId()
            , 'username' => $this->getUsername()
            , 'mail' => $this->getMail()
            , 'password' => $this->getPassword()
        ];
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param mixed $Id
     * @return User
     */
    public function setId($Id)
    {
        $this->id = $Id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->Username;
    }

    /**
     * @param mixed $Username
     * @return User
     */
    public function setUsername($Username)
    {
        $this->Username = $Username;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->Mail;
    }

    /**
     * @param mixed $Mail
     * @return User
     */
    public function setMail($Mail)
    {
        $this->Mail = $Mail;
        return $this;
    }
}