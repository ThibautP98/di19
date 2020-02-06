<?php

namespace src\Model;

class Contenu
{
    private $Id;
    private $Titre;
    private $Description;
    private $Statut;
    private $idCategorie;

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


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param mixed $Id
     * @return Contenu
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->Titre;
    }

    /**
     * @param mixed $Titre
     * @return Contenu
     */
    public function setTitre($Titre)
    {
        $this->Titre = $Titre;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->Description;
    }

    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @param mixed $Username
     * @return Contenu
     */

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($Username)
    {
        $this->username = $Username;
        return $this;
    }

    /**
     * @param mixed $Mail
     * @return Contenu
     */
    public function getMail()
    {
        return $this->mail;
    }

    public function setMail($Mail)
    {
        $this->mail = $Mail;
        return $this;
    }

    /**
     * @param mixed $Password
     * @return Contenu
     */
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($Password)
    {
        $this->password = $Password;
        return $this;
    }

    /**
     * @param mixed $Role
     * @return Contenu
     */
    public function getRole()
    {
        return $this->role;
    }

    public function setRole($Role)
    {
        $this->role = $Role;
        return $this;
    }

    public function getToken()
    {
        return $this->token;
    }

    public function setToken($Token)
    {
        $this->token = $Token;
        return $this;
    }
}