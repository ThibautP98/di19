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

/* /User/update.html.twig */
class __TwigTemplate_ef012b0fd51045f4f06aabb993670412c27684cc7ed0cebe06449150ffa948fd extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig", "/User/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Inscrivez vous ";
    }

    // line 3
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <style>
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

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "
    <div class=\"container-fluid mt-2\">
        <form id=\"login\" method=\"post\" action=\"/User/Update/";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 20), "html", null, true);
        echo "\">
            <p>Nom d'utilisateur :</p>
            <input type=\"text\" name=\"username\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 22), "html", null, true);
        echo "\" class=\"form-control\"
                   placeholder=\"Entrer un nom pseudo\">
            <p>Adresse mail :</p>
            <input type=\"email\" name=\"mail\" class=\"form-control\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "mail", [], "any", false, false, false, 25), "html", null, true);
        echo "\"
                   placeholder=\"Ex : exemple@mail.com\">
            <p>Rôle :</p>
            ";
        // line 28
        if (twig_in_filter("admin", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", false, false, false, 28), "role", [], "any", false, false, false, 28))) {
            // line 29
            echo "                <input type=\"checkbox\" name=\"roleAdmin\" value=\"admin\" checked readonly>Administrateur<br>
            ";
        } else {
            // line 31
            echo "                <input type=\"checkbox\" name=\"roleAdmin\" value=\"admin\">Administrateur<br>
            ";
        }
        // line 33
        echo "            ";
        if (twig_in_filter("redacteur", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", false, false, false, 33), "role", [], "any", false, false, false, 33))) {
            // line 34
            echo "                <input type=\"checkbox\" name=\"roleRedac\" value=\"redac\" checked readonly>Rédacteur
            ";
        } else {
            // line 36
            echo "                <input type=\"checkbox\" name=\"roleRedac\" value=\"redac\">Rédacteur
            ";
        }
        // line 38
        echo "            <br>
            <input id=\"login\" type=\"submit\" class=\"btn btn-secondary\">
            <a href=\"/User/MonEspace/";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 40), "html", null, true);
        echo "\">
                <button id=\"exit\" type=\"button\" class=\"btn btn-secondary\">Quitter</button>
            </a>
        </form>
    </div>

";
    }

    public function getTemplateName()
    {
        return "/User/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 40,  121 => 38,  117 => 36,  113 => 34,  110 => 33,  106 => 31,  102 => 29,  100 => 28,  94 => 25,  88 => 22,  83 => 20,  79 => 18,  75 => 17,  60 => 4,  56 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %}{{ parent() }} - Inscrivez vous {% endblock %}
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

{% block body %}

    <div class=\"container-fluid mt-2\">
        <form id=\"login\" method=\"post\" action=\"/User/Update/{{ user.id }}\">
            <p>Nom d'utilisateur :</p>
            <input type=\"text\" name=\"username\" value=\"{{ user.username }}\" class=\"form-control\"
                   placeholder=\"Entrer un nom pseudo\">
            <p>Adresse mail :</p>
            <input type=\"email\" name=\"mail\" class=\"form-control\" value=\"{{ user.mail }}\"
                   placeholder=\"Ex : exemple@mail.com\">
            <p>Rôle :</p>
            {% if 'admin' in session.login.role %}
                <input type=\"checkbox\" name=\"roleAdmin\" value=\"admin\" checked readonly>Administrateur<br>
            {% else %}
                <input type=\"checkbox\" name=\"roleAdmin\" value=\"admin\">Administrateur<br>
            {% endif %}
            {% if 'redacteur' in session.login.role %}
                <input type=\"checkbox\" name=\"roleRedac\" value=\"redac\" checked readonly>Rédacteur
            {% else %}
                <input type=\"checkbox\" name=\"roleRedac\" value=\"redac\">Rédacteur
            {% endif %}
            <br>
            <input id=\"login\" type=\"submit\" class=\"btn btn-secondary\">
            <a href=\"/User/MonEspace/{{ user.id }}\">
                <button id=\"exit\" type=\"button\" class=\"btn btn-secondary\">Quitter</button>
            </a>
        </form>
    </div>

{% endblock %}", "/User/update.html.twig", "C:\\Dev\\tp2\\di19\\templates\\User\\update.html.twig");
    }
}
