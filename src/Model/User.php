<?php

namespace src\Model;

class User extends Contenu implements \JsonSerializable
{
    private $Username;
    private $Mail;
    private $Password;

    public function firstXwords($nb)
    {
        $phrase = $this->getUsername();
        $arrayWord = str_word_count($phrase, 1);

        return implode(" ", array_slice($arrayWord, 0, $nb));
    }


    public function SqlAdd(\PDO $bdd)
    {
        try {
            $requete = $bdd->prepare('INSERT INTO utilisateurs (username, mail, password) VALUES(:username, :mail, :password)');
            $requete->execute([
                "username" => $this->getUsername(),
                "mail" => $this->getMail(),
                "password" => $this->getPassword(),
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
}