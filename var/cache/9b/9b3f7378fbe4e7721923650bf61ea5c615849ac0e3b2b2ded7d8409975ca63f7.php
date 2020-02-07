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

/* Article/Show.html.twig */
class __TwigTemplate_9fa02c7c423619bc5c84fb3e2d042e12ac0e5fc59ef88db9c5206a6ae427d7d6 extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig", "Article/Show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Détail de l'article - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    <h1>Détail de l'article :</h1>
    <table>
        <thead>
        <tr>
            <th>Titre</th>
            <th>Description</th>
            <th>Date d'ajout</th>
            <th>Auteur</th>
            <th>Image Repository</th>
            <th>Image File name</th>
            <th>ID Catégorie</th>
            <th>Statut</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "Titre", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "Description", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
            <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "DateAjout", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "Auteur", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
            <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ImageRepository", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ImageFileName", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
            <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id_categorie", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "statut", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
        </tr>
        </tbody>
    </table>

    <h1>Contact</h1>
    <div class=\"container-fluid mt-2\">
        <form method=\"post\" action=\"/Contact/sendMail/";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 36), "html", null, true);
        echo "\">
            <p>Nom d'utilisateur :</p>
            <input type=\"text\" name=\"username\">
            <p>Adresse mail</p>
            <input type=\"email\" name=\"email\">
            <p>Sujet :</p>
            <input type=\"text\" name=\"sujet\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "titre", [], "any", false, false, false, 42), "html", null, true);
        echo "\">
            <p>Description :</p>
            <textarea name=\"description\"></textarea>
            <br>
            <input type=\"submit\">
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Article/Show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 42,  116 => 36,  106 => 29,  102 => 28,  98 => 27,  94 => 26,  90 => 25,  86 => 24,  82 => 23,  78 => 22,  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %} Détail de l'article - {{ parent() }}{% endblock %}

{% block body %}

    <h1>Détail de l'article :</h1>
    <table>
        <thead>
        <tr>
            <th>Titre</th>
            <th>Description</th>
            <th>Date d'ajout</th>
            <th>Auteur</th>
            <th>Image Repository</th>
            <th>Image File name</th>
            <th>ID Catégorie</th>
            <th>Statut</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ article.Titre }}</td>
            <td>{{ article.Description }}</td>
            <td>{{ article.DateAjout }}</td>
            <td>{{ article.Auteur }}</td>
            <td>{{ article.ImageRepository }}</td>
            <td>{{ article.ImageFileName }}</td>
            <td>{{ article.id_categorie }}</td>
            <td>{{ article.statut }}</td>
        </tr>
        </tbody>
    </table>

    <h1>Contact</h1>
    <div class=\"container-fluid mt-2\">
        <form method=\"post\" action=\"/Contact/sendMail/{{ article.id }}\">
            <p>Nom d'utilisateur :</p>
            <input type=\"text\" name=\"username\">
            <p>Adresse mail</p>
            <input type=\"email\" name=\"email\">
            <p>Sujet :</p>
            <input type=\"text\" name=\"sujet\" value=\"{{ article.titre }}\">
            <p>Description :</p>
            <textarea name=\"description\"></textarea>
            <br>
            <input type=\"submit\">
        </form>
    </div>
{% endblock %}", "Article/Show.html.twig", "C:\\Dev\\tp2\\di19\\templates\\Article\\show.html.twig");
    }
}
