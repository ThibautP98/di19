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

/* User/login.html.twig */
class __TwigTemplate_ac72272b9064d2c3caca8aaf69ed8f0c03f6ed03e051407ccbb1c59515bed58b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
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
        $this->parent = $this->loadTemplate("index.html.twig", "User/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Connectez vous ";
    }

    // line 4
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <style>
        form#login{
            margin-right: 30%;
            margin-left: 30%;
            margin-top: 7%;
        }

        input#login, button#exit {
            width: 150px;
        }
    </style>
";
    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    <div class=\"container-fluid mt-2\">
        ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "errorlogin", [], "any", true, true, false, 20)) {
            // line 21
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "errorlogin", [], "any", false, false, false, 21), "html", null, true);
            echo "</div>
        ";
        }
        // line 23
        echo "
        <form id=\"login\" method=\"post\" action=\"/User/Login\">
            <h1>Connexion :</h1>
            <div class=\"form-group\">
                <label>Adresse mail :</label>
                <input type=\"email\" name=\"mail\" class=\"form-control\" placeholder=\"Entrer votre adresse mail\">
            </div>
            <div class=\"form-group\">
                <label>Mot de passe :</label>
                <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Entrer votre mot de passe\">
            </div>
            <input id=\"login\" type=\"submit\" class=\"btn btn-secondary\">
            <input id=\"login\" type=\"reset\" class=\"btn btn-secondary\">
            <a href=\"/User/Compte\">
                <button id=\"exit\" type=\"button\" class=\"btn btn-secondary\">Quitter</button>
            </a>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "User/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 23,  84 => 21,  82 => 20,  79 => 19,  75 => 18,  60 => 5,  56 => 4,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %}{{ parent() }} - Connectez vous {% endblock %}

{% block css %}
    <style>
        form#login{
            margin-right: 30%;
            margin-left: 30%;
            margin-top: 7%;
        }

        input#login, button#exit {
            width: 150px;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container-fluid mt-2\">
        {% if session.errorlogin is defined %}
            <div class=\"alert alert-danger\">{{ session.errorlogin }}</div>
        {% endif %}

        <form id=\"login\" method=\"post\" action=\"/User/Login\">
            <h1>Connexion :</h1>
            <div class=\"form-group\">
                <label>Adresse mail :</label>
                <input type=\"email\" name=\"mail\" class=\"form-control\" placeholder=\"Entrer votre adresse mail\">
            </div>
            <div class=\"form-group\">
                <label>Mot de passe :</label>
                <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Entrer votre mot de passe\">
            </div>
            <input id=\"login\" type=\"submit\" class=\"btn btn-secondary\">
            <input id=\"login\" type=\"reset\" class=\"btn btn-secondary\">
            <a href=\"/User/Compte\">
                <button id=\"exit\" type=\"button\" class=\"btn btn-secondary\">Quitter</button>
            </a>
        </form>
    </div>
{% endblock %}", "User/login.html.twig", "D:\\CESI\\PHP\\tp\\templates\\User\\login.html.twig");
    }
}
