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

/* Categorie/Catlist.html.twig */
class __TwigTemplate_ce05a70e6a350a51e491532eb3dc6d94373c22ee090758a73d611527b2040029 extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig", "Categorie/Catlist.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Liste des Catégorie - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    <div class=\"jumbotron\">
        <h1 class=\"display-4\">Liste des Catégorie</h1>
    </div>
    <div class=\"container\">
    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Titre</th>
            <th scope=\"col\">Description</th>
            <th scope=\"col\">Action</th>

        </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["CategorieList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Categorie"]) {
            // line 22
            echo "            <tr>
                <th scope=\"row\"><a href=\"/Categorie/Show/";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Categorie"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "\">#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Categorie"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</a></th>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Categorie"], "libelle", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Categorie"], "description", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                <td>
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                        <a class=\"btn btn-warning\" href=\"/Categorie/UpdateCat/";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Categorie"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "\"><i class=\"fas fa-edit\"></i></a>
                        <a class=\"btn btn-danger\" href=\"/Categorie/DeleteCat/";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Categorie"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "\"><i class=\"far fa-trash-alt\"></i></a>
                    </div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
        </tbody>
    </table>
    </div>


";
    }

    public function getTemplateName()
    {
        return "Categorie/Catlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 34,  104 => 29,  100 => 28,  94 => 25,  90 => 24,  84 => 23,  81 => 22,  77 => 21,  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %} Liste des Catégorie - {{ parent() }}{% endblock %}

{% block body %}

    <div class=\"jumbotron\">
        <h1 class=\"display-4\">Liste des Catégorie</h1>
    </div>
    <div class=\"container\">
    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Titre</th>
            <th scope=\"col\">Description</th>
            <th scope=\"col\">Action</th>

        </tr>
        </thead>
        <tbody>
        {% for Categorie in CategorieList %}
            <tr>
                <th scope=\"row\"><a href=\"/Categorie/Show/{{ Categorie.id }}\">#{{ Categorie.id }}</a></th>
                <td>{{ Categorie.libelle }}</td>
                <td>{{ Categorie.description }}</td>
                <td>
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                        <a class=\"btn btn-warning\" href=\"/Categorie/UpdateCat/{{ Categorie.id }}\"><i class=\"fas fa-edit\"></i></a>
                        <a class=\"btn btn-danger\" href=\"/Categorie/DeleteCat/{{ Categorie.id }}\"><i class=\"far fa-trash-alt\"></i></a>
                    </div>
                </td>
            </tr>
        {% endfor %}

        </tbody>
    </table>
    </div>


{% endblock %}", "Categorie/Catlist.html.twig", "C:\\Dev\\tp2\\di19\\templates\\Categorie\\Catlist.html.twig");
    }
}
