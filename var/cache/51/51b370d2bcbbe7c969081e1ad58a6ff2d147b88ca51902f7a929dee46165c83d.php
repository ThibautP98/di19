<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* User/register.html.twig */
class __TwigTemplate_e8572ea1553aa785fcf8fa7c83bc31b3202e44d261938f14564393433218afc4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'css' => [$this, 'block_css'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("index.html.twig", "User/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Inscription ";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('css', $context, $blocks);
        // line 18
        echo "    <div class=\"container-fluid mt-2\">
        ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "errorlogin", [], "any", true, true, false, 19)) {
            // line 20
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "errorlogin", [], "any", false, false, false, 20), "html", null, true);
            echo "</div>
        ";
        }
        // line 22
        echo "        <form method=\"post\" action=\"/User/Register\" id=\"login\">
            <h1>Inscription :</h1>
            <p>Nom d'utilisateur :</p>
            <input type=\"text\" name=\"username\" class=\"form-control\" placeholder=\"Entrer un nom pseudo\">
            <p>Adresse mail :</p>
            <input type=\"email\" name=\"mail\" class=\"form-control\" placeholder=\"Ex : exemple@mail.com\">
            <p>Rôle :&nbsp;&nbsp;&nbsp;
                <input type=\"checkbox\" name=\"roleAdmin\" value=\"admin\"/>Administrateur
                &nbsp;&nbsp;&nbsp;
                <input type=\"checkbox\" name=\"roleRedac\" value=\"redac\"/>Rédacteur
            </p>
            <p>Mot de passe :</p>
            <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Saisir un mot de passe\">
            <p>Confirmer le mot de passe :</p>
            <input type=\"password\" name=\"checkPwd\" class=\"form-control\" placeholder=\"Répéter votre mot de passe\"><br>
            <input id=\"login\" type=\"submit\" class=\"btn btn-secondary\">
            <input id=\"login\" type=\"reset\" class=\"btn btn-secondary\">
            <a href=\"/User/Compte\">
                <button id=\"exit\" type=\"button\" class=\"btn btn-secondary\">Quitter</button>
            </a>
        </form>
    </div>
";
    }

    // line 5
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "        <style>
            form#login {
                margin-right: 30%;
                margin-left: 30%;
                margin-top: 3%;
            }

            input#login, button#exit {
                width: 150px;
            }
        </style>
    ";
    }

    public function getTemplateName()
    {
        return "User/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 6,  102 => 5,  76 => 22,  70 => 20,  68 => 19,  65 => 18,  63 => 5,  60 => 4,  56 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %}{{ parent() }} - Inscription {% endblock %}
{% block body %}

    {% block css %}
        <style>
            form#login {
                margin-right: 30%;
                margin-left: 30%;
                margin-top: 3%;
            }

            input#login, button#exit {
                width: 150px;
            }
        </style>
    {% endblock %}
    <div class=\"container-fluid mt-2\">
        {% if session.errorlogin is defined %}
            <div class=\"alert alert-danger\">{{ session.errorlogin }}</div>
        {% endif %}
        <form method=\"post\" action=\"/User/Register\" id=\"login\">
            <h1>Inscription :</h1>
            <p>Nom d'utilisateur :</p>
            <input type=\"text\" name=\"username\" class=\"form-control\" placeholder=\"Entrer un nom pseudo\">
            <p>Adresse mail :</p>
            <input type=\"email\" name=\"mail\" class=\"form-control\" placeholder=\"Ex : exemple@mail.com\">
            <p>Rôle :&nbsp;&nbsp;&nbsp;
                <input type=\"checkbox\" name=\"roleAdmin\" value=\"admin\"/>Administrateur
                &nbsp;&nbsp;&nbsp;
                <input type=\"checkbox\" name=\"roleRedac\" value=\"redac\"/>Rédacteur
            </p>
            <p>Mot de passe :</p>
            <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Saisir un mot de passe\">
            <p>Confirmer le mot de passe :</p>
            <input type=\"password\" name=\"checkPwd\" class=\"form-control\" placeholder=\"Répéter votre mot de passe\"><br>
            <input id=\"login\" type=\"submit\" class=\"btn btn-secondary\">
            <input id=\"login\" type=\"reset\" class=\"btn btn-secondary\">
            <a href=\"/User/Compte\">
                <button id=\"exit\" type=\"button\" class=\"btn btn-secondary\">Quitter</button>
            </a>
        </form>
    </div>
{% endblock %}
", "User/register.html.twig", "D:\\CESI\\PHP\\tp\\templates\\User\\register.html.twig");
    }
}
