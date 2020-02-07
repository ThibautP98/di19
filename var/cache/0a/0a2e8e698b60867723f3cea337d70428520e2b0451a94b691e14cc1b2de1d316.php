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

/* User/list.html.twig */
class __TwigTemplate_bc48e3cda9b66d8c03fa7441ff88239e3755b3c254814488adc5e548c50534ac extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig", "User/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Mon espace - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <style>
        div {
            margin-left: 2.5%;
        }
    </style>
";
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "
    <h1>Mon espace :</h1>
    <table class=\"table\">
        <thead>
        <tr>
            <th scope=\"col\">Nom d'utilisateur</th>
            <th scope=\"col\">Adresse mail</th>
            <th scope=\"col\">Rôle</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
            <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "mail", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
        </tr>
        </tbody>
    </table>

    <div>
        <a href=\"/User/Update/";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 33), "html", null, true);
        echo "\">
            <button type=\"button\" class=\"btn btn-warning\"><i class=\"fas fa-edit\"></i>&nbsp;&nbsp;Modifier mon compte
            </button>
        </a>
        <a href=\"/User/Delete/";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 37), "html", null, true);
        echo "\">
            <button type=\"button\" class=\"btn btn-danger\"><i class=\"fas fa-trash\"></i>&nbsp;&nbsp;Supprimer mon compte
            </button>
        </a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "User/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 37,  104 => 33,  95 => 27,  91 => 26,  87 => 25,  73 => 13,  69 => 12,  60 => 5,  56 => 4,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %} Mon espace - {{ parent() }}{% endblock %}

{% block css %}
    <style>
        div {
            margin-left: 2.5%;
        }
    </style>
{% endblock %}

{% block body %}

    <h1>Mon espace :</h1>
    <table class=\"table\">
        <thead>
        <tr>
            <th scope=\"col\">Nom d'utilisateur</th>
            <th scope=\"col\">Adresse mail</th>
            <th scope=\"col\">Rôle</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ user.username }}</td>
            <td>{{ user.mail }}</td>
            <td>{{ user.role }}</td>
        </tr>
        </tbody>
    </table>

    <div>
        <a href=\"/User/Update/{{ user.id }}\">
            <button type=\"button\" class=\"btn btn-warning\"><i class=\"fas fa-edit\"></i>&nbsp;&nbsp;Modifier mon compte
            </button>
        </a>
        <a href=\"/User/Delete/{{ user.id }}\">
            <button type=\"button\" class=\"btn btn-danger\"><i class=\"fas fa-trash\"></i>&nbsp;&nbsp;Supprimer mon compte
            </button>
        </a>
    </div>
{% endblock %}", "User/list.html.twig", "D:\\CESI\\PHP\\tp\\templates\\User\\list.html.twig");
    }
}
