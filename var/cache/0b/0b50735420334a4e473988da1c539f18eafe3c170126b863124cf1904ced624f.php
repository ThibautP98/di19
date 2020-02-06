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

/* Article/add.html.twig */
class __TwigTemplate_01c8cf56326ceb1c2381c888977af0126aaac23060e3f7a408d5dcab579d4e3b extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig", "Article/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Ajout d'un article ";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    <div class=\"container-fluid mt-2\">

        <h2 class=\"display-3\">Ajout d'un article</h2>
        <hr class=\"my-4\">
        <form name=\"addArticle\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"form-group row\">
                <label for=\"Titre\" class=\"col-sm-2 col-form-label\">Titre de l'article</label>
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
            <div class=\"form-group row\">
                <label for=\"DateAjout\" class=\"col-sm-2 col-form-label\">Date</label>
                <div class=\"col-sm-10\">
                    <input type=\"date\" name=\"DateAjout\" class=\"form-control disabled\" value=\"<?php (new \\DateTime())->format('Y-m-d');?>\">
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"article_auteur\" class=\"col-sm-2 col-form-label\">Auteur</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"Auteur\" class=\"form-control\">
                </div>
            </div>
            <div class=\"form-group row\">
                <label for=\"Categorie_libelle\" class=\"col-sm-2 col-form-label\">Catégorie</label>
                <div class=\"col-sm-10\">
                    <select name=\"Catégorie\" class=\"form-control\">
                        ";
        // line 41
        $context["Libelles"] = [0 => "Science", 1 => "Histoire", 2 => "Divertissement"];
        // line 42
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Libelles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Libelle"]) {
            // line 43
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["Libelle"], "html", null, true);
            echo "\" ";
            if (0 === twig_compare($context["Libelle"], twig_get_attribute($this->env, $this->source, ($context["Categorie"] ?? null), "Libelle", [], "any", false, false, false, 43))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["Libelle"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Libelle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                    </select>

                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"image\" class=\"col-sm-2 col-form-label\">Image de l'article</label>
                <div class=\"col-sm-10\">
                    <div class=\"custom-file\">
                        <input type=\"file\" class=\"form-control-file custom-file-input\" name=\"image\" id=\"inputFile\">
                        <input type=\"file\" class=\"custom-file-input\" id=\"inputGroupFile01\">
                        <label class=\"custom-file-label\" for=\"inputGroupFile01\"></label>
                    </div>
                </div>
            </div>
            <input type=\"hidden\" name=\"token\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "\">
            <input type=\"submit\" class=\"btn btn-primary my-1\">
        </form>
    </div>

";
    }

    public function getTemplateName()
    {
        return "Article/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 60,  119 => 45,  104 => 43,  99 => 42,  97 => 41,  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %}{{ parent() }} - Ajout d'un article {% endblock %}

{% block body %}

    <div class=\"container-fluid mt-2\">

        <h2 class=\"display-3\">Ajout d'un article</h2>
        <hr class=\"my-4\">
        <form name=\"addArticle\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"form-group row\">
                <label for=\"Titre\" class=\"col-sm-2 col-form-label\">Titre de l'article</label>
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
            <div class=\"form-group row\">
                <label for=\"DateAjout\" class=\"col-sm-2 col-form-label\">Date</label>
                <div class=\"col-sm-10\">
                    <input type=\"date\" name=\"DateAjout\" class=\"form-control disabled\" value=\"<?php (new \\DateTime())->format('Y-m-d');?>\">
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"article_auteur\" class=\"col-sm-2 col-form-label\">Auteur</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"Auteur\" class=\"form-control\">
                </div>
            </div>
            <div class=\"form-group row\">
                <label for=\"Categorie_libelle\" class=\"col-sm-2 col-form-label\">Catégorie</label>
                <div class=\"col-sm-10\">
                    <select name=\"Catégorie\" class=\"form-control\">
                        {% set Libelles = ['Science','Histoire','Divertissement'] %}
                        {% for Libelle in Libelles %}
                            <option value=\"{{ Libelle }}\" {% if Libelle == Categorie.Libelle %}selected{% endif %}>{{ Libelle }}</option>
                        {% endfor %}
                    </select>

                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"image\" class=\"col-sm-2 col-form-label\">Image de l'article</label>
                <div class=\"col-sm-10\">
                    <div class=\"custom-file\">
                        <input type=\"file\" class=\"form-control-file custom-file-input\" name=\"image\" id=\"inputFile\">
                        <input type=\"file\" class=\"custom-file-input\" id=\"inputGroupFile01\">
                        <label class=\"custom-file-label\" for=\"inputGroupFile01\"></label>
                    </div>
                </div>
            </div>
            <input type=\"hidden\" name=\"token\" value=\"{{ token }}\">
            <input type=\"submit\" class=\"btn btn-primary my-1\">
        </form>
    </div>

{% endblock %}", "Article/add.html.twig", "D:\\CESI\\PHP\\tp\\templates\\Article\\add.html.twig");
    }
}
