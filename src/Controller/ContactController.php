<?php

namespace src\Controller;

use src\Model\Bdd;
use src\Model\Article;

class ContactController extends AbstractController
{
    private $mailer;
    private $transport;

    public function __construct()
    {
        parent::__construct();
        $this->transport = (new \Swift_SmtpTransport('smtp.mailtrap.io', 465))
            ->setUsername('e3551e38ebe08d')
            ->setPassword('07a45e2a8083e6');
        $this->mailer = new \Swift_Mailer($this->transport);

    }

    public function sendMail($idArticle)
    {
        $articleSQL = new Article();
        $article = $articleSQL->SqlGet(BDD::getInstance(), $idArticle);
        $mail = (new \Swift_Message('Contact depuis le formulaire.'))
            ->setFrom([$_POST["email"] => $_POST["username"]])
            ->setTo('contact@monsite.fr')
            ->setBody(
                $this->twig->render('Contact/mail.html.twig',
                    [
                        'article' => $article,
                        'username' => $_POST["username"],
                        'email' => $_POST["email"],
                        'description' => $_POST["content"]
                    ])
                , 'text/html'
            );
        $result = $this->mailer->send($mail);
        return $result;
    }

}
