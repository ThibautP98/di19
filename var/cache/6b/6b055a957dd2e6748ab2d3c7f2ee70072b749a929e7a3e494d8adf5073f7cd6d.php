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

/* Article/Admin.html.twig */
class __TwigTemplate_6403f3944abc1122852cde3ac5315f0cb49989d593c249f48dbb1c292466b9c3 extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig", "Article/Admin.html.twig", 1);
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
    </div>
    <div class=\"container\">
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Titre</th>
                <th scope=\"col\">Auteur</th>
                <th scope=\"col\">Date</th>
                <th scope=\"col\">Statut</th>
                <th scope=\"col\">Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articleList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 23
            echo "                <tr>
                    <th scope=\"row\"><a href=\"/Article/Show/";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "\">#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "</a></th>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "Titre", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "Auteur", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "DateAjout", [], "any", false, false, false, 27), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "statusArticle", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                    <td>
                        <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                            <a class=\"btn btn-success\" href=\"/Article/Show/";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "\"><i class=\"far fa-eye\"></i></a>
                            <a class=\"btn btn-warning\" href=\"/Article/Update/";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\"><i class=\"fas fa-edit\"></i></a>
                            <a class=\"btn btn-danger\" href=\"/Article/Delete/";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "\"><i class=\"far fa-trash-alt\"></i></a>
                        </div>
                    </td>
                    <td>
                        <input type=\"radio\" name=\"statut";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "\" value=\"validé\">Validé
                        <label class=\"radio-inline\"><input type=\"radio\" name=\"statut";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "\" value=\"enLigne\">Enligne
                        <input type=\"radio\" name=\"statut";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "\" value=\"refusés\" >Refusé
                        <input type=\"Submit\"  name=\"Valide\" href=\"Admin/articleVerifier/";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "\" >
                    </td>

                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
            </tbody>
        </table>
    </div>


";
    }

    public function getTemplateName()
    {
        return "Article/Admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 45,  136 => 40,  132 => 39,  128 => 38,  124 => 37,  117 => 33,  113 => 32,  109 => 31,  103 => 28,  99 => 27,  95 => 26,  91 => 25,  85 => 24,  82 => 23,  78 => 22,  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %} Liste des articles - {{ parent() }}{% endblock %}

{% block body %}

    <div class=\"jumbotron\">
        <h1 class=\"display-4\">Liste des articles</h1>
    </div>
    <div class=\"container\">
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Titre</th>
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
                    <td>{{ article.Auteur }}</td>
                    <td>{{ article.DateAjout | date(\"d/m/Y\") }}</td>
                    <td>{{ article.statusArticle }}</td>
                    <td>
                        <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                            <a class=\"btn btn-success\" href=\"/Article/Show/{{ article.id }}\"><i class=\"far fa-eye\"></i></a>
                            <a class=\"btn btn-warning\" href=\"/Article/Update/{{ article.id }}\"><i class=\"fas fa-edit\"></i></a>
                            <a class=\"btn btn-danger\" href=\"/Article/Delete/{{ article.id }}\"><i class=\"far fa-trash-alt\"></i></a>
                        </div>
                    </td>
                    <td>
                        <input type=\"radio\" name=\"statut{{ article.id }}\" value=\"validé\">Validé
                        <label class=\"radio-inline\"><input type=\"radio\" name=\"statut{{ article.id }}\" value=\"enLigne\">Enligne
                        <input type=\"radio\" name=\"statut{{ article.id }}\" value=\"refusés\" >Refusé
                        <input type=\"Submit\"  name=\"Valide\" href=\"Admin/articleVerifier/{{ article.id }}\" >
                    </td>

                </tr>
            {% endfor %}

            </tbody>
        </table>
    </div>


{% endblock %}", "Article/Admin.html.twig", "C:\\Dev\\www\\TP\\templates\\Article\\Admin.html.twig");
    }
}
