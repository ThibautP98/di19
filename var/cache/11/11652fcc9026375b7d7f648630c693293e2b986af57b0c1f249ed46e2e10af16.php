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

/* Categorie/CatAdd.html.twig */
class __TwigTemplate_450f2b1da393fefd838775914d444cd157b7c1ca39ce3216f2c508e6b91a4e36 extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig", "Categorie/CatAdd.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Ajout d'une Catégorie ";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    <div class=\"container-fluid mt-2\">

        <h2 class=\"display-3\">Ajout d'une Catégorie</h2>
        <hr class=\"my-4\">
        <form name=\"addCategorie\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"form-group row\">
                <label for=\"Titre\" class=\"col-sm-2 col-form-label\">Nom</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"Titre\" class=\"form-control form-control-lg\">
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"Description\" class=\"col-sm-2 col-form-label\">Description</label>
                <div class=\"col-sm-10\">
                    <textarea name=\"Description\" class=\"form-control\" rows=\"9\"></textarea>
                </div>
            </div>

            <input type=\"hidden\" name=\"token\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "\">
            <input type=\"submit\" class=\"btn btn-primary my-1\">
        </form>
    </div>

";
    }

    public function getTemplateName()
    {
        return "Categorie/CatAdd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 25,  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %}{{ parent() }} - Ajout d'une Catégorie {% endblock %}

{% block body %}

    <div class=\"container-fluid mt-2\">

        <h2 class=\"display-3\">Ajout d'une Catégorie</h2>
        <hr class=\"my-4\">
        <form name=\"addCategorie\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"form-group row\">
                <label for=\"Titre\" class=\"col-sm-2 col-form-label\">Nom</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"Titre\" class=\"form-control form-control-lg\">
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"Description\" class=\"col-sm-2 col-form-label\">Description</label>
                <div class=\"col-sm-10\">
                    <textarea name=\"Description\" class=\"form-control\" rows=\"9\"></textarea>
                </div>
            </div>

            <input type=\"hidden\" name=\"token\" value=\"{{ token }}\">
            <input type=\"submit\" class=\"btn btn-primary my-1\">
        </form>
    </div>

{% endblock %}", "Categorie/CatAdd.html.twig", "C:\\Dev\\tp2\\di19\\templates\\Categorie\\CatAdd.html.twig");
    }
}
