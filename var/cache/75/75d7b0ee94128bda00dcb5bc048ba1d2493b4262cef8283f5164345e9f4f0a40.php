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
class __TwigTemplate_5ada77e67cdacc4672a9f98bfb15634e0ccac89cb5717a54e2679d71700d7c60 extends Template
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
        <a class=\"nav-link dropdown-toggle\" href=\"/Categorie\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            Catégorie
        </a>
        <div class=\"col-sm-10\">
            <select name=\"id_categorie\" class=\"form-control\">
                ";
        // line 14
        $context["listCategorie"] = [0 => "Histoire", 1 => "Médical", 2 => "Informatique", 3 => "Sciences"];
        // line 15
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listCategorie"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Categorie"]) {
            // line 16
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $context["Categorie"], "html", null, true);
            echo "\" ";
            if (0 === twig_compare($context["Categorie"], twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "categorie_id", [], "any", false, false, false, 16))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["Categorie"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </select>
        </div>
    </div>
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
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articleList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 37
            echo "            <tr>
                <th scope=\"row\"><a href=\"/Article/Show/";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "\">#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "</a></th>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "Titre", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td> ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "idCategorie", [], "any", false, false, false, 40), "html", null, true);
            echo " </td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "Auteur", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "DateAjout", [], "any", false, false, false, 42), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "Statut", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td>
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                        <a class=\"btn btn-success\" href=\"/Article/Show/";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 46), "html", null, true);
            echo "\"><i class=\"far fa-eye\"></i></a>
                        <a class=\"btn btn-warning\" href=\"/Article/Update/";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo "\"><i class=\"fas fa-edit\"></i></a>
                        <a class=\"btn btn-danger\" href=\"/Article/Delete/";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "\"><i class=\"fas fa-trash\"></i></a>
                    </div>
                    <a class=\"btn btn-secondary\" href=\"/Article/WriteOne/";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 50), "html", null, true);
            echo "\"><i class=\"fas fa-file-download\"></i></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
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
        return array (  173 => 54,  163 => 50,  158 => 48,  154 => 47,  150 => 46,  144 => 43,  140 => 42,  136 => 41,  132 => 40,  128 => 39,  122 => 38,  119 => 37,  115 => 36,  95 => 18,  80 => 16,  75 => 15,  73 => 14,  64 => 8,  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %} Liste des articles - {{ parent() }}{% endblock %}

{% block body %}

    <div class=\"jumbotron\">
        <h1 class=\"display-4\">Liste des articles</h1>
        <a class=\"btn btn-success\" href=\"/Article/Add/{{ article.id }}\"><i class=\"far fa-edit\"></i>Créer un article</a>
        <a class=\"nav-link dropdown-toggle\" href=\"/Categorie\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            Catégorie
        </a>
        <div class=\"col-sm-10\">
            <select name=\"id_categorie\" class=\"form-control\">
                {% set listCategorie = ['Histoire','Médical','Informatique','Sciences'] %}
                {% for Categorie in listCategorie %}
                    <option value=\"{{ Categorie }}\" {% if Categorie == article.categorie_id %}selected{% endif %}>{{ Categorie }}</option>
                {% endfor %}
            </select>
        </div>
    </div>
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
                        <a class=\"btn btn-warning\" href=\"/Article/Update/{{ article.id }}\"><i class=\"fas fa-edit\"></i></a>
                        <a class=\"btn btn-danger\" href=\"/Article/Delete/{{ article.id }}\"><i class=\"fas fa-trash\"></i></a>
                    </div>
                    <a class=\"btn btn-secondary\" href=\"/Article/WriteOne/{{ article.id }}\"><i class=\"fas fa-file-download\"></i></a>
                </td>
            </tr>
        {% endfor %}

        </tbody>
    </table>
    </div>


{% endblock %}", "Article/list.html.twig", "C:\\Dev\\tp2\\di19\\templates\\Article\\list.html.twig");
    }
}
