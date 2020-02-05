<?php

namespace src\Model;

class User extends Contenu implements \JsonSerializable
{
    private $Id;
    private $Token;
    private $Username;
    private $Mail;
    private $Password;
    private $Role;

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

    public function SqlGetMail(\PDO $bdd, $mailUser)
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
            $requete = $bdd->prepare('INSERT INTO utilisateurs (token, username, mail, password, role) VALUES(:token, :username, :mail, :password, :role)');
            $requete->execute([
                "token" => $this->getToken(),
                "username" => $this->getUsername(),
                "mail" => $this->getMail(),
                "password" => $this->getPassword(),
                "role" => $this->getRole()
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
            , 'token' => $this->getToken()
            , 'username' => $this->getUsername()
            , 'mail' => $this->getMail()
            , 'password' => $this->getPassword()
            , 'role' => $this->getRole()
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

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * @param mixed $Password
     * @return User
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->Role;
    }

    /**
     * @param mixed $Role
     * @return User
     */
    public function setRole($Role)
    {
        $this->Role = $Role;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param mixed $Token
     * @return User
     */
    public function setToken($Token)
    {
        $this->Token = $Token;
        return $this;
    }
}