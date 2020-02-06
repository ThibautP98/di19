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

/* Categorie/Catupdate.html.twig */
class __TwigTemplate_98e456019fd24294a4ca700f80b5457232f90bb22a20602e9b72596aad2d9308 extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig", "Categorie/Catupdate.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Mise à jour d'une Catégorie ";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container-fluid mt-2\">
    <h2 class=\"display-3\">Mise à jour d'une Catégorie</h2>
    <hr class=\"my-4\">
    <div class=\"row\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categorie"] ?? null), "libelle", [], "any", false, false, false, 11), "html", null, true);
        echo "</h5>
                <p class=\"card-text\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categorie"] ?? null), "description", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
            </div>

        <form name=\"updateCategorie\" method=\"post\" class=\"col-lg-8\" enctype=\"multipart/form-data\">

            <div class=\"form-group row\">
                <label for=\"Titre\" class=\"col-sm-2 col-form-label\">Titre</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"Titre\" class=\"form-control form-control-lg\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categorie"] ?? null), "libelle", [], "any", false, false, false, 20), "html", null, true);
        echo "\" >
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"Description\" class=\"col-sm-2 col-form-label\">Description</label>
                <div class=\"col-sm-10\">
                    <textarea name=\"Description\" class=\"form-control\" rows=\"7\">";
        // line 27
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categorie"] ?? null), "description", [], "any", false, false, false, 27), "html", null, true));
        echo "</textarea>
                </div>
            </div>

            <input type=\"submit\" class=\"btn btn-primary my-1\">
        </form>
    </div>


</div>

";
    }

    public function getTemplateName()
    {
        return "Categorie/Catupdate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 27,  81 => 20,  70 => 12,  66 => 11,  59 => 6,  55 => 5,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %}{{ parent() }} - Mise à jour d'une Catégorie {% endblock %}


{% block body %}
<div class=\"container-fluid mt-2\">
    <h2 class=\"display-3\">Mise à jour d'une Catégorie</h2>
    <hr class=\"my-4\">
    <div class=\"row\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">{{ categorie.libelle }}</h5>
                <p class=\"card-text\">{{ categorie.description }}</p>
            </div>

        <form name=\"updateCategorie\" method=\"post\" class=\"col-lg-8\" enctype=\"multipart/form-data\">

            <div class=\"form-group row\">
                <label for=\"Titre\" class=\"col-sm-2 col-form-label\">Titre</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"Titre\" class=\"form-control form-control-lg\" value=\"{{ categorie.libelle }}\" >
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"Description\" class=\"col-sm-2 col-form-label\">Description</label>
                <div class=\"col-sm-10\">
                    <textarea name=\"Description\" class=\"form-control\" rows=\"7\">{{ categorie.description | nl2br }}</textarea>
                </div>
            </div>

            <input type=\"submit\" class=\"btn btn-primary my-1\">
        </form>
    </div>


</div>

{% endblock %}", "Categorie/Catupdate.html.twig", "C:\\Dev\\tp2\\di19\\templates\\Categorie\\Catupdate.html.twig");
    }
}
