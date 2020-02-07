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

/* Article/list.html.twig */
class __TwigTemplate_51ac23452c118ce563b0d5ff6330516be71e3cc276afbb642d82beee90c11231 extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig", "Article/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Liste des articles - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    <div class=\"jumbotron\">
        <h1 class=\"display-4\">Liste des articles</h1>
        <a class=\"btn btn-success\" href=\"/Article/Add/";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 8), "html", null, true);
        echo "\"><i class=\"far fa-edit\"></i>Créer un article</a>
        ";
        // line 10
        echo "        ";
        // line 11
        echo "        ";
        // line 12
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["CategorieList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Categorie"]) {
            // line 13
            echo "
            <select>
                <option selected>--Toutes les catégories</option>
                <option value=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Categorie"], "Id", [], "any", false, false, false, 16), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Categorie"], "Libelle", [], "any", false, false, false, 16), "html", null, true);
            echo "</option>
            </select>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
    </div>
    <div class=\"container\">
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Titre</th>
                <th scope=\"col\">Catégorie</th>
                <th scope=\"col\">Auteur</th>
                <th scope=\"col\">Date</th>
                <th scope=\"col\">Statut</th>
                <th scope=\"col\">Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articleList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 36
            echo "                <tr>
                    <th scope=\"row\"><a href=\"/Article/Show/";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "\">#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "</a></th>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "Titre", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                    <td> ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "idCategorie", [], "any", false, false, false, 39), "html", null, true);
            echo " </td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "Auteur", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "DateAjout", [], "any", false, false, false, 41), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "Statut", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                    <td>
                        <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                            <a class=\"btn btn-success\" href=\"/Article/Show/";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "\"><i class=\"far fa-eye\"></i></a>
                            <a class=\"btn btn-warning\" href=\"/Article/Update/";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 46), "html", null, true);
            echo "\"><i
                                        class=\"fas fa-edit\"></i></a>
                            <a class=\"btn btn-danger\" href=\"/Article/Delete/";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "\"><i
                                        class=\"fas fa-trash\"></i></a>
                        </div>
                        <a class=\"btn btn-secondary\" href=\"/Article/WriteOne/";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 51), "html", null, true);
            echo "\"><i
                                    class=\"fas fa-file-download\"></i></a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
            </tbody>
        </table>
    </div>


";
    }

    public function getTemplateName()
    {
        return "Article/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 56,  161 => 51,  155 => 48,  150 => 46,  146 => 45,  140 => 42,  136 => 41,  132 => 40,  128 => 39,  124 => 38,  118 => 37,  115 => 36,  111 => 35,  93 => 19,  82 => 16,  77 => 13,  72 => 12,  70 => 11,  68 => 10,  64 => 8,  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %} Liste des articles - {{ parent() }}{% endblock %}

{% block body %}

    <div class=\"jumbotron\">
        <h1 class=\"display-4\">Liste des articles</h1>
        <a class=\"btn btn-success\" href=\"/Article/Add/{{ article.id }}\"><i class=\"far fa-edit\"></i>Créer un article</a>
        {#        <a class=\"nav-link dropdown-toggle\" href=\"/Categorie\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">#}
        {#            Catégorie#}
        {#        </a>#}
        {% for Categorie in CategorieList %}

            <select>
                <option selected>--Toutes les catégories</option>
                <option value=\"{{ Categorie.Id }}\">{{ Categorie.Libelle }}</option>
            </select>
        {% endfor %}

    </div>
    <div class=\"container\">
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Titre</th>
                <th scope=\"col\">Catégorie</th>
                <th scope=\"col\">Auteur</th>
                <th scope=\"col\">Date</th>
                <th scope=\"col\">Statut</th>
                <th scope=\"col\">Actions</th>
            </tr>
            </thead>
            <tbody>
            {% for article in articleList %}
                <tr>
                    <th scope=\"row\"><a href=\"/Article/Show/{{ article.id }}\">#{{ article.id }}</a></th>
                    <td>{{ article.Titre }}</td>
                    <td> {{ article.idCategorie }} </td>
                    <td>{{ article.Auteur }}</td>
                    <td>{{ article.DateAjout | date(\"d/m/Y\") }}</td>
                    <td>{{ article.Statut }}</td>
                    <td>
                        <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                            <a class=\"btn btn-success\" href=\"/Article/Show/{{ article.id }}\"><i class=\"far fa-eye\"></i></a>
                            <a class=\"btn btn-warning\" href=\"/Article/Update/{{ article.id }}\"><i
                                        class=\"fas fa-edit\"></i></a>
                            <a class=\"btn btn-danger\" href=\"/Article/Delete/{{ article.id }}\"><i
                                        class=\"fas fa-trash\"></i></a>
                        </div>
                        <a class=\"btn btn-secondary\" href=\"/Article/WriteOne/{{ article.id }}\"><i
                                    class=\"fas fa-file-download\"></i></a>
                    </td>
                </tr>
            {% endfor %}

            </tbody>
        </table>
    </div>


{% endblock %}", "Article/list.html.twig", "D:\\CESI\\PHP\\tp\\templates\\Article\\list.html.twig");
    }
}
